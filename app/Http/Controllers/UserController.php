<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Alumnus;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Cerita;
use App\Models\Acara;
use App\Models\Daftaracara;
use App\Models\Kenangan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $news = News::take(4)->get();
        $gallerys = Gallery::take(4)->get();
        $alumnus = Alumnus::all();
        $alumni = Alumnus::take(3)->get();
        $kenangan = Kenangan::take(6)->get();
        $cerita = Cerita::orderBy('created_at', 'desc')->take(3)->get();
        return view('user.web', [
            'news' => $news,
            'gallerys' => $gallerys,
            'alumnus' => $alumnus,
            'alumni' => $alumni,
            'kenangan' => $kenangan,
            'cerita' => $cerita,
        ])
            ->with('navbar', $navbar)
            ->with('footer', $footer);
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'message' => 'required|string',
            ],
            [
                'name.required' => 'Nama harus diisi.',
                'email.required' => 'Email harus diisi.',
                'phone.required' => 'No Telepon harus diisi.',
                'message.required' => 'Harap Masukkan Pesan.',
            ],
        );

        // Simpan data ke dalam database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Set pesan sukses
        $successMessage = 'Pesan berhasil terkirim!';

        // Redirect pengguna kembali ke halaman formulir dengan pesan sukses
        return redirect()->back()->with('success', $successMessage);
    }

    public function blogdetail($id)
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $news = News::findOrFail($id);
        return view('user.newsdetail', compact('news'))->with('navbar', $navbar)->with('footer', $footer);
    }

    public function acara()
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $gallerys = Gallery::all();
        $alumnus = Alumnus::all();
        return view('user.acara', ['gallerys' => $gallerys, 'alumnus' => $alumnus])
            ->with('navbar', $navbar)
            ->with('footer', $footer);
    }

    public function alumni()
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $alumnus = Alumnus::all();
        return view('user.alumni', ['alumnus' => $alumnus])
            ->with('navbar', $navbar)
            ->with('footer', $footer);
    }

    public function news()
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $news = News::all();
        return view('user.news', ['news' => $news])
            ->with('navbar', $navbar)
            ->with('footer', $footer);
    }

    public function galeri()
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $kenanganslider = Kenangan::orderBy('created_at', 'desc')->take(6)->get();
        $kenangan = Kenangan::all();

        $images = $kenanganslider->pluck('foto')->toArray();

        return view('user.galeri', ['kenanganslider' => $kenanganslider, 'images' => $images, 'kenangan' => $kenangan])
            ->with('navbar', $navbar)
            ->with('footer', $footer);
    }

    public function cerita()
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $cerita = Cerita::all();
        $ceritakiri = $cerita->slice($cerita->count() / 2);
        $ceritakanan = $cerita->take($cerita->count() / 2);

        return view('user.cerita', ['ceritakiri' => $ceritakiri, 'ceritakanan' => $ceritakanan])
            ->with('navbar', $navbar)
            ->with('footer', $footer);
    }

    public function ceritadetail($id)
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $cerita = Cerita::findOrFail($id);
        return view('user.ceritadetail', compact('cerita'))->with('navbar', $navbar)->with('footer', $footer);

    }

    public function searchgaleri(Request $request)
    {
        if ($request->has('search')) {
            $navbar = view('user.navbar');
            $footer = view('user.footer');
            $searchTerm = $request->search;
            $galeri = Gallery::where('nama_kegiatan', 'LIKE', '%' . $searchTerm . '%')->get();

            if ($galeri->isEmpty()) {
                $navbar = view('user.navbar');
                $footer = view('user.footer');
                return view('user.galeri', ['galeri' => $galeri, 'navbar' => $navbar, 'footer' => $footer])
                    ->with('message', 'Data tidak ditemukan')
                    ->with('searchTerm', $searchTerm);
            } else {
                $navbar = view('user.navbar');
                $footer = view('user.footer');
                return view('user.galeri', ['galeri' => $galeri, 'navbar' => $navbar, 'footer' => $footer]);
            }
        } else {
            $galeri = Gallery::all();
            $navbar = view('user.navbar');
            $footer = view('user.footer');
            return view('user.galeri', ['galeri' => $galeri, 'navbar' => $navbar, 'footer' => $footer]);
        }
    }

    public function galeridetail($id)
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $galeri = Gallery::findOrFail($id);
        return view('user.galeridetail', compact('galeri'))->with('navbar', $navbar)->with('footer', $footer);
    }

    public function daftaracara(Request $request)
{
    try {
        // Validasi input
        $request->validate([
            'nim' => 'required|string|exists:alumnus,nim',
            'nama_kegiatan' => 'required|string|exists:kegiatan,nama_kegiatan',
        ]);

        // Simpan data ke database
        $daftarAcara = new Daftaracara();
        $daftarAcara->nim = $request->nim;
        $daftarAcara->nama_kegiatan = $request->nama_kegiatan;
        $daftarAcara->save();

        return response()->json([
            'success' => true,
            'message' => 'Pendaftaran berhasil!',
        ]);
    } catch (\Illuminate\Validation\ValidationException $e) {

        return response()->json([
            'success' => false,
            'message' => 'NIM harus sesuai!',
        ]);
    } catch (\Exception $e) {
        // Tangkap pesan kesalahan lainnya
        $errorMessage = $e->getMessage();

        // Berikan respon JSON dengan pesan gagal
        return response()->json([
            'success' => false,
            'message' => $errorMessage,
        ]);
    }
}


    public function alumnidetail($id)
    {
        $navbar = view('user.navbar');
        $footer = view('user.footer');
        $alumnus = Alumnus::findOrFail($id);
        return view('user.alumnidetail', compact('alumnus'))->with('navbar', $navbar)->with('footer', $footer);
    }

    public function searchalumni(Request $request)
    {
        if ($request->has('search')) {
            $navbar = view('user.navbar');
            $footer = view('user.footer');
            $searchTerm = $request->search;
            $alumnus = Alumnus::where('name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('nim', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('jurusan', 'LIKE', '%'. $searchTerm . '%')
                ->get();

            if ($alumnus->isEmpty()) {
                $navbar = view('user.navbar');
                $footer = view('user.footer');
                return view('user.alumni', ['alumnus' => $alumnus, 'navbar' => $navbar, 'footer' => $footer])
                    ->with('message', 'Data tidak ditemukan')
                    ->with('searchTerm', $searchTerm);
            } else {
                $navbar = view('user.navbar');
                $footer = view('user.footer');
                return view('user.alumni', ['alumnus' => $alumnus, 'navbar' => $navbar, 'footer' => $footer]);
            }
        } else {
            $alumnus = Alumnus::all();
            $navbar = view('user.navbar');
            $footer = view('user.footer');
            return view('user.alumni', ['alumnus' => $alumnus, 'navbar' => $navbar, 'footer' => $footer]);
        }
    }
}
