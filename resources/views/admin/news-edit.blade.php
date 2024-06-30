@extends('admin.layouts.base')

@section('title', 'Edit Data Berita')

@section('content')
<div class="flex justify-center">
    <div class="w-full sm:w-2/3 p-4 bg-white shadow-md rounded-md">

        {{-- Alert Here --}}
        @if ($errors->any())
            <div class="bg-red-500 p-4 mb-4 rounded-md">
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
            <!-- /.card-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" method="POST"
            action="{{ route('admin.news.update', $news->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Judul Berita</label>
                        <input type="text" name="judul" class="w-full border p-2 rounded-md" id="inputJudul" value="{{ $news->judul}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputPenulis" class="block text-sm font-semibold text-gray-600">Penulis Berita</label>
                        <input type="text" name="penulis" class="w-full border p-2 rounded-md" id="inputPenulis" value="{{ $news->penulis}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputTanggal" class="block text-sm font-semibold text-gray-600">Tanggal</label>
                        <input type="date" name="tanggal" class="w-full border p-2 rounded-md" id="inputTanggal" value="{{ $news->tanggal}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputIsi" class="block text-sm font-semibold text-gray-600">Isi Berita</label>
                        <textarea name="isi" id="inputIsi" cols="10" rows="5" class="w-full border p-2 rounded-md">{{ $news->isi}}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="inputKategori" class="block text-sm font-semibold text-gray-600">Kategori</label>
                        <select name="kategori" id="inputKategori" class="w-full border p-2 rounded-md">
                            @php
                                $kategoriOptions = ["TEKNOLOGI", "PENDIDIKAN", "SOSIAL", "BUDAYA", "AGAMA"];
                            @endphp
                            @foreach ($kategoriOptions as $option)
                                <option value="{{ $option }}" {{ $option == $news->kategori ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-4">
                        <label for="inputFoto" class="block text-sm font-semibold text-gray-600">Foto</label>
                        <input type="file" name="foto" id="inputFoto" class="w-full border p-2 rounded-md">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button class="bg-[#BAAD9D] from-stone-600 to-lime-400 px-10 text-xs rounded-1.8 py-3 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white hover:text-stone-600">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

