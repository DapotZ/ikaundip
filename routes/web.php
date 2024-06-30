<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\admin\CeritaController;
use App\Http\Controllers\Admin\AlumnusController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\DataUserController;
use App\Http\Controllers\admin\PengikutacaraController;
use App\Http\Controllers\Admin\KenanganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [LoginUserController::class, 'register'])->name('register');
Route::post('/register', [LoginUserController::class, 'registermethod'])->name('user.register');

Route::get('logout', [LoginUserController::class, 'logout'])->name('user.logout');

Route::get('/', [UserController::class, 'index'])->name('user');

Route::get('/alumni', [UserController::class, 'alumni'])->name('user.alumni');
Route::get('/alumni/search', [UserController::class, 'searchalumni'])->name('user.alumni.search');
Route::get('/alumni/{id}', [UserController::class, 'alumnidetail'])->name('user.alumni.detail');

Route::get('/acara', [UserController::class, 'acara'])->name('user.acara');

Route::get('/news', [UserController::class, 'news'])->name('user.news');
Route::get('/news/{id}', [UserController::class, 'blogdetail'])->name('user.blog');

Route::get('/cerita', [UserController::class, 'cerita'])->name('user.cerita');
Route::get('/cerita/{id}', [UserController::class, 'ceritadetail'])->name('user.ceritadetail');

Route::get('/galeri', [UserController::class, 'galeri'])->name('user.galeri');
Route::get('/galeri/search', [UserController::class, 'searchgaleri'])->name('user.galeri.search');
Route::get('/galeri/{id}', [UserController::class, 'galeridetail'])->name('user.galeridetail');
Route::post('/acara/daftaracara', [UserController::class, 'daftaracara'])->name('user.daftaracara');

Route::post('/contact/store', [UserController::class, 'store'])->name('contact.store');

// Routes Admin

Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::group(['prefix' => 'berita'], function () {
        Route::get('/', [NewsController::class, 'index'])->name('admin.news');
        Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::put('/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    });

    Route::group(['prefix' => 'kenangan'], function () {
        Route::get('/', [KenanganController::class, 'index'])->name('admin.kenangan');
        Route::get('/create', [KenanganController::class, 'create'])->name('admin.kenangan.create');
        Route::post('/store', [KenanganController::class, 'store'])->name('admin.kenangan.store');
        Route::get('/edit/{id}', [KenanganController::class, 'edit'])->name('admin.kenangan.edit');
        Route::put('/update/{id}', [KenanganController::class, 'update'])->name('admin.kenangan.update');
        Route::delete('/destroy/{id}', [KenanganController::class, 'destroy'])->name('admin.kenangan.destroy');
    });

    Route::group(['prefix' => 'kegiatan'], function () {
        Route::get('/', [GalleryController::class, 'index'])->name('admin.gallery');
        Route::get('/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
        Route::post('/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
        Route::put('/update/{id}', [GalleryController::class, 'update'])->name('admin.gallery.update');
        Route::delete('/destroy/{id}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');
        Route::get('/kegiatan/search', [GalleryController::class, 'searchkegiatan'])->name('admin.kegiatan.search');

        Route::get('/calendarkegiatan', [GalleryController::class, 'calendarkegiatan'])->name('admin.gallery.calendarkegiatan');
        Route::get('/calendarkegiatan/events', [GalleryController::class, 'events']);
        Route::get('/calendarkegiatan/check-event/{date}', [GalleryController::class, 'checkevents']);
    });

    Route::group(['prefix' => 'alumni'], function () {
        Route::get('/', [AlumnusController::class, 'index'])->name('admin.alumnus');
        Route::get('/edit/{id}', [AlumnusController::class, 'edit'])->name('admin.alumnus.edit');
        Route::put('/update/{id}', [AlumnusController::class, 'update'])->name('admin.alumnus.update');
        Route::delete('/destroy/{id}', [AlumnusController::class, 'destroy'])->name('admin.alumnus.destroy');
        Route::get('/alumni/search', [AlumnusController::class, 'searchalumni'])->name('admin.alumni.search');
        Route::get('/alumni/export-excel', [AlumnusController::class, 'exportExcel'])->name('admin.alumni.export-excel');
        Route::get('/alumni/export-pdf', [AlumnusController::class, 'exportpdf'])->name('admin.alumni.export-pdf');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('admin.contact');
        Route::delete('/destroy/{id}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');
        Route::get('/contact/search', [ContactController::class, 'searchcontact'])->name('admin.contact.search');
    });

    Route::group(['prefix' => 'cerita'], function () {
        Route::get('/', [CeritaController::class, 'index'])->name('admin.cerita');
        Route::get('/create', [CeritaController::class, 'create'])->name('admin.cerita.create');
        Route::post('/store', [CeritaController::class, 'store'])->name('admin.cerita.store');
        Route::get('/edit/{id}', [CeritaController::class, 'edit'])->name('admin.cerita.edit');
        Route::put('/update/{id}', [CeritaController::class, 'update'])->name('admin.cerita.update');
        Route::delete('/destroy/{id}', [CeritaController::class, 'destroy'])->name('admin.cerita.destroy');
    });

    Route::group(['prefix' => 'datauser'], function () {
        Route::get('/', [DataUserController::class, 'index'])->name('admin.datauser');
        Route::get('/create', [DataUserController::class, 'create'])->name('admin.datauser.create');
        Route::post('/store', [DataUserController::class, 'store'])->name('admin.datauser.store');
        Route::get('/edit/{id}', [DataUserController::class, 'edit'])->name('admin.datauser.edit');
        Route::put('/update/{id}', [DataUserController::class, 'update'])->name('admin.datauser.update');
        Route::delete('/destroy/{id}', [DataUserController::class, 'destroy'])->name('admin.datauser.destroy');
    });

    Route::group(['prefix' => 'pengikutacara'], function () {
        Route::get('/', [PengikutacaraController::class, 'index'])->name('admin.pengikutacara');
        Route::delete('/destroy/{id}', [PengikutacaraController::class, 'destroy'])->name('admin.pengikutacara.destroy');
        Route::get('/pengikutacara/search', [PengikutacaraController::class, 'searchpengikutacara'])->name('admin.pengikutacara.search');
        Route::get('/pengikutacara/export-excel', [PengikutacaraController::class, 'exportExcel'])->name('admin.pengikutacara.export-excel');
        Route::get('/pengikutacara/export-pdf', [PengikutacaraController::class, 'exportpdf'])->name('admin.pengikutacara.export-pdf');
    });
});
