@extends('admin.layouts.base')

@section('title', 'Tambah Data Galeri')

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
                    <h3>Tambah Data Galeri</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.kenangan.store') }}">
                    @csrf
                    <div>
                        <div class="mb-4">
                            <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Tittle Foto</label>
                            <input type="text" name="title_foto" class="w-full border p-2 rounded-md" id="inputJudul">
                        </div>
                        <div class="mb-4">
                            <label for="inputFoto" class="block text-sm font-semibold text-gray-600">Foto Kenangan</label>
                            <input type="file" name="foto" id="inputFoto" class="w-full border p-2 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Title Video</label>
                            <input type="text" name="title_video" class="w-full border p-2 rounded-md" id="inputJudul">
                        </div>
                        <div class="mb-4">
                            <label for="inputFoto" class="block text-sm font-semibold text-gray-600">Video Kenangan</label>
                            <input type="file" name="video" id="inputFoto" class="w-full border p-2 rounded-md">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button class="bg-[#BAAD9D] from-stone-600 to-lime-400 px-10 text-xs rounded-1.8 py-3 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white hover:text-stone-600">Tambah
                            Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
