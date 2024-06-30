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
    <section class="pb-10 pt-20 lg:pb-20 lg:pt-[120px]" id="alumni">
        <div id="alumni" class="py-1 h-auto font-[poppins]">
                <div class="container mx-auto px-4 py-2">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                                <span class="mb-2 block text-4xl font-semibold text-[#7e5d50] font-[Montserrat]">
                                    BERITA
                        </span>
                        <h2 class="mb-3 text-3xl font-[poppins] leading-[1.2] sm:text-4xl md:text-[30px]">
                            Berita Semua IKA Undip
                        </h2>
                    </div>
                </div>
            </div>

            <!-- ====== Story Section Start -->
            <section id="alumni-story" class="relative min-h-auto">
                @foreach ($news as $new)
                    <div class="flex flex-wrap w-full h-full mb-10">
                        <!-- Section Kiri -->
                        <div class="w-full md:w-1/2 bg-cover bg-center relative"
                            style="background-image: url('{{ asset('storage/news/' . $new->foto) }}');">
                            <div class="absolute inset-0 bg-stone-700 opacity-70"></div>
                            <div class="relative z-10 px-10 md:px-6 py-20 ml-16 mt-6">
                                <h1 class="font-[montserrat] text-[#f9f6f2] mb-2 ml-1 font-thin">
                                    <span>Berita</span>
                                </h1>
                                <h1 class="text-6xl text-[#f9f6f2] font-[Montserrat]">{{ $new->kategori }}</h1>
                                <h5 class="text-1xl text-[#f9f6f2] font-[Montserrat]">{{ $new->tanggal }}</h5>
                                <h5 class="text-1xl text-[#f9f6f2] font-[Montserrat]">{{ $new->penulis }}</h5>
                            </div>
                        </div>
                        <!-- Section Kanan -->
                        <div class="w-full md:w-1/2 bg-[#fefefe] px-8 md:px-6 py-4">
                            <div class="flex mb-2 mt-2 transform transition duration-300 hover:scale-105">
                                <div class="w-2/3">
                                    <a href="{{ route('user.blog', $new->id) }}">
                                        <p class="text-base md:text-lg font-semibold">{{$new->judul}}</p>
                                        <p class="text-sm md:text-base text-gray-700">{{ \Illuminate\Support\Str::limit($new->isi, 300, '...') }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>

            <!-- ====== Story Section End -->
        </div>
    </section>
    <!-- ====== Team Section End -->


    <!-- Menampilkan footer -->
    {!! $footer !!}
</body>

</html>
