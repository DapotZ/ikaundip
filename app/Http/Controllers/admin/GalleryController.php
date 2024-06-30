<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::all();

        return view('admin.gallery', ['gallerys' => $gallerys]);
    }

    public function create(Request $request)
    {
        $date = $request->query('date');
        return view('admin.gallery-create', compact('date'));
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery-edit', ['gallery' => $gallery]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'nama_kegiatan' => 'required|string',
            'detail_kegiatan' => 'required|string',
            'start' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'lokasi' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $photoGallery = $request->photo;


        $originalPhotoGalleryName =
            Str::random(10) . $photoGallery->getClientOriginalName();

        $photoGallery->storeAs(
            'public/gallery',
            $originalPhotoGalleryName
        );

        $data['photo'] = $originalPhotoGalleryName;

        Gallery::create($data);

        return redirect()
            ->route('admin.gallery')
            ->with('success', 'Data Kegiatan Berhasil Dibuat');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');

        $request->validate([
            'nama_kegiatan' => 'required|string',
            'detail_kegiatan' => 'required|string',
            'start' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'lokasi' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpeg,jpg,png',
            ]);

            $photoGallery = $request->photo;

            $originalPhotoGalleryName = Str::random(10) . $photoGallery->getClientOriginalName();

            $photoGallery->storeAs(
                'public/gallery',
                $originalPhotoGalleryName
            );

            Storage::delete('public/gallery/' . $gallery->photo);

            $data['photo'] = $originalPhotoGalleryName;
        }

        $gallery->update($data);

        return redirect()
            ->route('admin.gallery')
            ->with('success', 'Data Kegiatan Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete file photo
        Storage::delete('public/gallery/' . $gallery->photo);

        $gallery->delete();

        return redirect()
            ->route('admin.gallery')
            ->with('success', 'Data Kegiatan Berhasil Dihapus');
    }

    public function calendarkegiatan()
    {
        return view('admin.calendarkegiatan');
    }

    public function events()
    {
        $events = Gallery::all()->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->nama_kegiatan,
                'start' => $event->start,
            ];
        });
        return response()->json($events);
    }

    public function checkevents($date)
    {
        $hasEvent = Gallery::whereDate('start', $date)->exists();

        return response()->json(['hasEvent' => $hasEvent]);
    }

    public function searchkegiatan(Request $request)
    {
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $gallerys = Gallery::where('nama_kegiatan', 'LIKE', '%' . $searchTerm . '%')
                ->get();
            $searchTerm = $request->search;

            if ($gallerys->isEmpty()) {
                return view('admin.gallery', ['gallerys' => $gallerys])->with('message', 'Data tidak ditemukan')->with('searchTerm', $searchTerm);
            } else {
                return view('admin.gallery', ['gallerys' => $gallerys]);
            }
        } else {
            $gallerys = Gallery::all();
            return view('admin.gallery', ['gallerys' => $gallerys]);
        }
    }
}
