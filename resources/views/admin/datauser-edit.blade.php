@extends('admin.layouts.base')

@section('title', 'Edit Data Pendaftaran Alumni')

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
                <h3>Edit Data Pendaftaran Alumni</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" method="POST"
            action="{{ route('admin.datauser.update', $datauser->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label for="inputJudul" class="block text-sm font-semibold text-gray-600">Nama</label>
                        <input type="text" name="name" class="w-full border p-2 rounded-md" id="inputJudul" value="{{$datauser->name}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputPenulis" class="block text-sm font-semibold text-gray-600">NIM</label>
                        <input type="number" name="nim" class="w-full border p-2 rounded-md" id="inputPenulis" value="{{$datauser->nim}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputKategori" class="block text-sm font-semibold text-gray-600">Fakultas</label>
                        <select name="fakultas" id="inputKategori" class="w-full border p-2 rounded-md">
                            @php
                                $fakultasOptions = ["Teknik Informatika", "Teknik Mesin", "kedokteran"];
                            @endphp
                            @foreach ($fakultasOptions as $option)
                                <option value="{{ $option }}" {{ $option == $datauser->fakultas ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-4">
                        <label for="inputPenulis" class="block text-sm font-semibold text-gray-600">Jurusan</label>
                        <input type="text" name="jurusan" class="w-full border p-2 rounded-md" id="inputPenulis" value="{{$datauser->jurusan}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputPenulis" class="block text-sm font-semibold text-gray-600">Tahun Lulus</label>
                        <input type="text" name="tahunlulus" class="w-full border p-2 rounded-md" id="inputPenulis" value="{{$datauser->tahunlulus}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputPenulis" class="block text-sm font-semibold text-gray-600">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="w-full border p-2 rounded-md" id="inputPenulis" value="{{$datauser->pekerjaan}}">
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

