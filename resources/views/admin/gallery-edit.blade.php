@extends('admin.layouts.base')

@section('title', 'Edit Data Acara')

@section('content')
    <div class="flex justify-center">
        <div class="w-full sm:w-2/3 p-4 bg-white shadow-md rounded-md">

            {{-- Alert Here --}}
            @if ($errors->any())
                <div class="bg-red-500  p-4 mb-4 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class= "bg-primary ">
                <div>
                    <h3>Edit Data Berita</h3>
                </div>
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.gallery.update', $gallery->id) }}">
                    @csrf
                    @method('PUT')
                    <div>
                        <div class="mb-4">
                            <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" class="w-full border p-2 rounded-md" id="inputJudul"
                                value="{{ $gallery->nama_kegiatan }}">
                        </div>
                        <div class="mb-4">
                            <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Detail
                                Kegiatan</label>
                            <input type="text" name="detail_kegiatan" class="w-full border p-2 cols="30" rows="10" rounded-md"
                                id="inputJudul" value="{{ $gallery->detail_kegiatan }}">
                        </div>
                        <div class="mb-4">
                            <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Mulai Kegiatan</label>
                            <input type="date" name="start" class="w-full border p-2 rounded-md" id="inputJudul"
                                value="{{ $gallery->start }}">
                        </div>
                        <div class="mb-4">
                            <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Jam Mulai
                                Kegiatan</label>
                            <input type="time" name="start_time" class="w-full border p-2 rounded-md" id="inputJudul"
                                value="{{ $gallery->start_time }}">
                        </div>
                        <div class="mb-4">
                            <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Jam Selesai
                                Kegiatan</label>
                            <input type="time" name="end_time" class="w-full border p-2 rounded-md" id="inputJudul"
                                value="{{ $gallery->end_time }}">
                        </div>
                        <div class="mb-4">
                            <label for="inputJudul" class="block text-sm font-semibold text-gray-600">lokasi</label>
                            <input type="text" name="lokasi" class="w-full border p-2 rounded-md" id="inputJudul"
                                value="{{ $gallery->lokasi }}">
                        </div>
                        <div class="mb-4">
                            <label for="inputFoto" class="block text-sm font-semibold text-gray-600">Foto Kegiatan</label>
                            <input type="file" name="photo" id="inputFoto" class="w-full border p-2 rounded-md">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button class="bg-[#BAAD9D] from-stone-600 to-lime-400 px-10 text-xs rounded-1.8 py-3 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white hover:text-stone-600">Edit
                            Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
