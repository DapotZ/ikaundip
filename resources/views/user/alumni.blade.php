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

    <!-- ====== Team Section Start -->
    <section class="pb-10 pt-20 bg-[#f9f6f2] lg:pb-10 lg:pt-[120px]" id="alumni">
        <div class="container mx-auto">

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
                                    Profil Alumni IKA Undip
                                </h>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row justify-end">
                <form action="{{ route('user.alumni.search') }}" method="GET">
                    <div class="pt-2 relative mx-auto w-full text-gray-600 px-2 pb-10">
                        <input type="search" name="search"
                            class="border border-stone-800 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-stone-800"
                            placeholder="Mencari">
                        <button type="submit" class="absolute right-0 top-1 mt-3 mr-5">
                            <svg class="text-stone-600 h-5 w-4 mx-auto fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </form>
                <br>
            </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-2">
                        @foreach ($alumnus as $alumnus)
                            <div class="bg-stone-500 rounded-lg shadow-md overflow-hidden">
                                <div class="bg-white p-4">
                                    <div class="text-center mb-1">
                                        <img src="{{ asset('storage/alumnus/' . $alumnus->foto) }}" alt="Foto Profil"
                                            class="mx-auto rounded-full w-40 h-40 object-cover">
                                        <p class="mt-5 font-semibold">{{ $alumnus->name }}</p>
                                        <p class="text-gray-600">{{ $alumnus->nim }}</p>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 pt-4 mt-auto text-white">
                                    <div class="text-center mb-5">
                                        <p class="font-semibold">FAKULTAS</p>
                                        <p>{{ $alumnus->fakultas }}</p>
                                    </div>
                                    <div class="text-center mb-5">
                                        <p class="font-semibold">JURUSAN</p>
                                        <p>{{ $alumnus->jurusan }}</p>
                                    </div>
                                    <div class="text-center mb-5">
                                        <p class="font-semibold">TAHUN LULUS</p>
                                        <p>{{ $alumnus->tahunlulus }}</p>
                                    </div>
                                    <div class="text-center mb-5">
                                        <p class="font-semibold">PEKERJAAN</p>
                                        <p>{{ $alumnus->pekerjaan }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- ====== alumnus Section End -->
        </div>
    </section>
    <!-- ====== Team Section End -->


    <!-- Menampilkan footer -->
    {!! $footer !!}
</body>

</html>
