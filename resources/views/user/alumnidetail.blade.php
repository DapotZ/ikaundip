<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IKA UNDIP</title>
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('asset/css/tailwind.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="{{ asset('asset/js/alpine.min.js') }}"></script>
</head>

<body>

    <!-- Navbar -->
    {!! $navbar !!}

    <!-- ====== Alumni Section Start -->
    <div id="alumni" class="py-1 h-auto font-[poppins]">
        <div class="container mx-auto px-4 py-2">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                        <span class="mb-2 block text-4xl font-semibold text-[#7e5d50] font-[Montserrat]">
                            ALUMNI
                        </span>
                        <h class="mb-3 text-3xl font-[poppins] leading-[1.2] sm:text-4xl md:text-[30px]">
                            Profil Anggota Alumni IKA Undip
                        </h>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-2">
                <div class="bg-stone-500 rounded-lg shadow-md overflow-hidden">
                    <div class="bg-white p-4">
                        <div class="text-center mb-1">
                            <img src="https://via.placeholder.com/150" alt="Foto Profil"
                                class="mx-auto rounded-full w-40 h-40">
                            <p class="mt-5 font-semibold">Nama Alumni</p>
                            <p class="text-gray-600">NIM Alumni</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 pt-4 mt-auto text-white">
                        <div class="text-center mb-5">
                            <p class="font-semibold">FAKULTAS</p>
                            <p>Teknik Informatika</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">JURUSAN</p>
                            <p>12345678</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">TAHUN LULUS</p>
                            <p>2025</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">PEKERJAAN</p>
                            <p>IT Analys</p>
                        </div>
                    </div>
                </div>

                <div class="bg-stone-500  rounded-lg shadow-md overflow-hidden">
                    <div class="bg-white p-4">
                        <div class="text-center mb-1">
                            <img src="https://via.placeholder.com/150" alt="Foto Profil"
                                class="mx-auto rounded-full w-40 h-40">
                            <p class="mt-5 font-semibold">Nama Alumni</p>
                            <p class="text-gray-600">NIM Alumni</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 pt-4 mt-auto text-white">
                        <div class="text-center mb-5">
                            <p class="font-semibold">FAKULTAS</p>
                            <p>Teknik Informatika</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">JURUSAN</p>
                            <p>12345678</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">TAHUN LULUS</p>
                            <p>2025</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">PEKERJAAN</p>
                            <p>IT Analys</p>
                        </div>
                    </div>
                </div>

                <div class="bg-stone-500  rounded-lg shadow-md overflow-hidden">
                    <div class="bg-white p-4">
                        <div class="text-center mb-1">
                            <img src="https://via.placeholder.com/150" alt="Foto Profil"
                                class="mx-auto rounded-full w-40 h-40">
                            <p class="mt-5 font-semibold">Nama Alumni</p>
                            <p class="text-gray-600">NIM Alumni</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 pt-4 mt-auto text-white">
                        <div class="text-center mb-5">
                            <p class="font-semibold">FAKULTAS</p>
                            <p>Teknik Informatika</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">JURUSAN</p>
                            <p>12345678</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">TAHUN LULUS</p>
                            <p>2025</p>
                        </div>
                        <div class="text-center mb-5">
                            <p class="font-semibold">PEKERJAAN</p>
                            <p>IT Analys</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Alumni Section End -->


    <!-- Menampilkan footer -->
    {!! $footer !!}
</body>

</html>
