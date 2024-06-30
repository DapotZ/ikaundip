<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kenangan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KenanganController extends Controller
{
    public function index()
    {
        $kenangan = Kenangan::all();

        return view('admin.kenangan', ['kenangan' => $kenangan]);
    }

    public function create()
    {
        return view('admin.kenangan-create');
    }

    public function store(Request $request)
    {
        // Validasi kustom
        $request->validate([
            'title_foto' => 'nullable|required_with:foto|string',
            'foto' => 'nullable|required_with:title_foto|image|mimes:jpeg,jpg,png',
            'title_video' => 'nullable|required_with:video|string',
            'video' => 'nullable|required_with:title_video|mimes:mp4,mov,avi|max:20000',
        ]);

        // Validasi bahwa setidaknya satu set harus ada
        if (
            (!$request->filled('title_foto') && !$request->filled('foto')) &&
            (!$request->filled('title_video') && !$request->filled('video'))
        ) {
            return redirect()->back()->withErrors(['error' => 'Anda harus mengisi setidaknya satu set (title_foto dan foto atau title_video dan video) dengan benar'])->withInput();
        }

        $data = $request->except('_token', 'foto', 'video');

        // Proses penyimpanan file foto jika ada
        if ($request->hasFile('foto')) {
            $fotokenangan = $request->file('foto');
            $originalFotoKenanganName = Str::random(10) . '_' . $fotokenangan->getClientOriginalName();
            $fotokenangan->storeAs('public/kenangan', $originalFotoKenanganName);
            $data['foto'] = $originalFotoKenanganName;
        }

        // Proses penyimpanan file video jika ada
        if ($request->hasFile('video')) {
            $videokenangan = $request->file('video');
            $originalVideoKenanganName = Str::random(10) . '_' . $videokenangan->getClientOriginalName();
            $videokenangan->storeAs('public/kenangan', $originalVideoKenanganName);
            $data['video'] = $originalVideoKenanganName;
        }

        Kenangan::create($data);

        return redirect()->route('admin.kenangan')->with('success', 'Data Kenangan Berhasil Dibuat');
    }


    public function edit($id)
    {
        $kenangan = Kenangan::find($id);
        return view('admin.kenangan-edit', ['kenangan' => $kenangan]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');

        $request->validate([
            'title_foto' => 'nullable|required_with:foto|string',
            'foto' => 'nullable|required_with:title_foto|image|mimes:jpeg,jpg,png',
            'title_video' => 'nullable|required_with:video|string',
            'video' => 'nullable|required_with:title_video|mimes:mp4,mov,avi|max:20000',
        ]);

        $kenangan = Kenangan::findOrFail($id);

        if (
            (!$request->filled('title_foto') && !$request->filled('foto')) &&
            (!$request->filled('title_video') && !$request->filled('video'))
        ) {
            return redirect()->back()->withErrors(['error' => 'Anda harus mengisi setidaknya satu set (title_foto dan foto atau title_video dan video) dengan benar'])->withInput();
        }

        $data = $request->except('_token', 'foto', 'video');

        // Proses penyimpanan file foto jika ada
        if ($request->hasFile('foto')) {
            $fotokenangan = $request->file('foto');
            $originalFotoKenanganName = Str::random(10) . '_' . $fotokenangan->getClientOriginalName();
            $fotokenangan->storeAs('public/kenangan', $originalFotoKenanganName);
            $data['foto'] = $originalFotoKenanganName;
        }

        // Proses penyimpanan file video jika ada
        if ($request->hasFile('video')) {
            $videokenangan = $request->file('video');
            $originalVideoKenanganName = Str::random(10) . '_' . $videokenangan->getClientOriginalName();
            $videokenangan->storeAs('public/kenangan', $originalVideoKenanganName);
            $data['video'] = $originalVideoKenanganName;
        }

        $kenangan->update($data);

        return redirect()
            ->route('admin.kenangan')
            ->with('success', 'Data Kenangan Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $kenangan = Kenangan::findOrFail($id);

        Storage::delete('public/kenangan/' . $kenangan->photo);
        Storage::delete('public/kenangan/' . $kenangan->video);

        $kenangan->delete();

        return redirect()
            ->route('admin.kenangan')
            ->with('success', 'Data kenangan Berhasil Dihapus');
    }
}
