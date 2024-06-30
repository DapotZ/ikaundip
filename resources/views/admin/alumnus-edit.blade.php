@extends('admin.layouts.base')

@section('title', 'Edit Data Alumni')

@section('content')
{{-- Alert Here --}}
@if ($errors->any())
<div class="bg-red p-4 mb-4 rounded-md">
    <ul class="text-white">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="flex items-center justify-center h-screen">
    <div class="w-full sm:w-2/3 p-4 bg-white shadow-md rounded-md">
        <div class= "bg-primary ">
            <div>
                <h3>Edit Data Alumni</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.alumnus.update', $alumnus->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Nama Alumni</label>
                        <input type="text" name="name" class="w-full border p-2 rounded-md" id="inputJudul" value="{{$alumnus->name}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputPenulis" class="block text-sm font-semibold text-gray-600">NIM Alumni</label>
                        <input type="text" name="nim" class="w-full border p-2 rounded-md" id="inputPenulis" value="{{$alumnus->nim}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputJob" class="block text-sm font-semibold text-gray-600">Fakultas Alumni</label>
                        <input type="text" name="fakultas" class="w-full border p-2 rounded-md" id="inputJob" value="{{$alumnus->fakultas}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputJob" class="block text-sm font-semibold text-gray-600">Jurusan Alumni</label>
                        <input type="text" name="jurusan" class="w-full border p-2 rounded-md" id="inputJob" value="{{$alumnus->jurusan}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputJob" class="block text-sm font-semibold text-gray-600">Tahun Lulus Alumni</label>
                        <input type="text" name="tahunlulus" class="w-full border p-2 rounded-md" id="inputJob" value="{{$alumnus->tahunlulus}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputJob" class="block text-sm font-semibold text-gray-600">Pekerjaan Alumni</label>
                        <input type="text" name="pekerjaan" class="w-full border p-2 rounded-md" id="inputJob" value="{{$alumnus->pekerjaan}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputFoto" class="block text-sm font-semibold text-gray-600">Foto Alumni</label>
                        <input for="foto" type="file" name="foto" id="inputFoto" class="w-full border p-2 rounded-md">
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

