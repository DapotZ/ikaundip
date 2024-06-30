<?php

namespace App\Http\Controllers\admin;

use App\Models\Cerita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CeritaController extends Controller
{
    public function index()
    {
        $cerita = Cerita::all();

        return view('admin.cerita', ['cerita' => $cerita]);
    }

    public function create()
    {
        return view('admin.cerita-create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'foto' => 'required|image|mimes:jpeg,jpg,png',
            'penulis' => 'required|string',
            'judul_cerita' => 'required|string',
            'isi_cerita' => 'required|string',
            'jurusan' => 'required|string',
            'angkatan' => 'required|string',
        ]);

        $fotocerita = $request->foto;


        $originalfotoceritaName =
            Str::random(10) . $fotocerita->getClientOriginalName();

        $fotocerita->storeAs(
            'public/cerita',
            $originalfotoceritaName
        );

        $data['foto'] = $originalfotoceritaName;

        Cerita::create($data);

        return redirect()
            ->route('admin.cerita')
            ->with('success', 'Data Cerita Berhasil Dibuat');
    }

    public function edit($id)
    {
        $cerita = Cerita::find($id);
        return view('admin.cerita-edit', ['cerita'=> $cerita]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');

        $request->validate([
            'foto' => 'required|image|mimes:jpeg,jpg,png',
            'penulis' => 'required|string',
            'judul_cerita' => 'required|string',
            'isi_cerita' => 'required|string',
            'jurusan' => 'required|string',
            'angkatan' => 'required|string',
        ]);

        $cerita = Cerita::findOrFail($id);

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,jpg,png',
            ]);

            $fotocerita = $request->foto;

            $originalfotoceritaName = Str::random(10) . $fotocerita->getClientOriginalName();

            $fotocerita->storeAs(
                'public/cerita',
                $originalfotoceritaName
            );

            Storage::delete('public/cerita/' . $cerita->foto);

            $data['foto'] = $originalfotoceritaName;
        }

        $cerita->update($data);

        return redirect()
            ->route('admin.cerita')
            ->with('success', 'Data Cerita Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $cerita = Cerita::findOrFail($id);

        // Delete file photo
        Storage::delete('public/cerita/' . $cerita->photo);

        $cerita->delete();

        return redirect()
            ->route('admin.cerita')
            ->with('success', 'Data Cerita Berhasil Dihapus');
    }
}
