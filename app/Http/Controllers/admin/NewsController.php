<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('admin.news', ['news' => $news]);
    }

    public function create()
    {
        return view('admin.news-create');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news-edit', ['news'=> $news]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'isi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,jpg,png' ,
            'tanggal' => 'required|string',
            'kategori' => 'required|string',
        ]);

        $fotoNews = $request->foto;


        $originalfotoNewsName =
            Str::random(10) . $fotoNews->getClientOriginalName();

        $fotoNews->storeAs(
            'public/news',
            $originalfotoNewsName
        );

        $data['foto'] = $originalfotoNewsName;

        News::create($data);

        return redirect()
            ->route('admin.news')
            ->with('success', 'Data Berita Berhasil Dibuat');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');

        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|string',
            'kategori' => 'required|string',
        ]);

        $news = News::findOrFail($id);

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,jpg,png',
            ]);

            $fotoNews = $request->foto;

            $originalfotoNewsName = Str::random(10) . $fotoNews->getClientOriginalName();

            $fotoNews->storeAs(
                'public/news',
                $originalfotoNewsName
            );

            // Delete foto lama
            Storage::delete('public/news/' . $news->foto);

            $data['foto'] = $originalfotoNewsName;
        }

        $news->update($data);

        return redirect()
            ->route('admin.news')
            ->with('success', 'Data Berita Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Delete file foto
        Storage::delete('public/news/' . $news->foto);

        $news->delete();

        return redirect()
            ->route('admin.news')
            ->with('success', 'Data Berita Berhasil Dihapus');
    }
}
