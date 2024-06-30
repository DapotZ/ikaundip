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


    <!-- ====== Blog Section Start -->
    <section class="bg-white pb-10 pt-20 lg:pb-20 lg:pt-[120px]">
        <div id="alumni" class="py-1 h-auto font-[poppins]">
                <div class="container mx-auto px-4 py-2">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                                <span class="mb-2 block text-4xl font-semibold text-[#7e5d50] font-[Montserrat]">
                                    BERITA
                        </span>
                        <h2 class="mb-3 text-3xl font-[poppins] leading-[1.2] sm:text-4xl md:text-[30px]">
                            Detail Berita IKA Undip
                        </h2>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap">

                <div class="w-full px-4 md:w-full">
                    <div class="mb-10 w-full">
                        <div class="flex justify-center items-center h-full">
                            <img src="{{ asset('storage/news/' . $news->foto) }}" alt="image" class="w-full h-full object-cover aspect-square" />
                        </div>
                        <div>
                            <br>
                            <span
                                class="mb-5 inline-block rounded bg-stone-700 px-4 py-1 text-center text-xs font-semibold leading-loose text-white ">
                                {{ $news->tanggal }}
                            </span>
                            <span
                                class="mb-5 inline-block rounded bg-stone-700 px-4 py-1 text-center text-xs font-semibold leading-loose text-white">
                                {{ $news->penulis }}
                            </span>
                            <span
                                class="mb-5 inline-block rounded bg-stone-700 px-4 py-1 text-center text-xs font-semibold leading-loose text-white">
                                {{ $news->kategori }}
                            </span>
                            <h3>
                                <a href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-black sm:text-2xl lg:text-xl xl:text-2xl">
                                    {{ $news->judul }}
                                </a>
                            </h3>
                            <p class="text-black text-semibold text-lg mt-3">{{ $news->isi }}</p>
                            <div class="mt-10">
                                <a href="{{ route('user') }}"
                                    class="mb-5 inline-block rounded bg-stone-700 px-4 py-1 text-center text-xs font-semibold leading-loose text-white">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->

    <!-- Menampilkan footer -->
    {!! $footer !!}
</body>

</html>
