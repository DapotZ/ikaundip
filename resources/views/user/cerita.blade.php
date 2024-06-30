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


    <section class="pb-10 pt-20 lg:pb-20 lg:pt-[120px]" id="alumni">
        <div id="alumni" class="py-1 h-auto font-[poppins]">
            <div class="container mx-auto px-4 py-2">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                            <span class="mb-2 block text-4xl font-semibold text-[#7e5d50] font-[Montserrat]">
                                CERITA
                            </span>
                            <h2 class="mb-3 text-3xl font-[poppins] leading-[1.2] sm:text-4xl md:text-[30px]">
                                Cerita Alumni IKA Undip
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- ====== Story Section Start -->
                <section id="alumni-story" class="relative min-h-auto">
                    <div class="flex flex-wrap w-full h-full">
                        <!-- Section Kiri -->
                        <div class="w-full md:w-1/2 bg-[#fefefe] px-8 md:px-6 py-4">
                            @foreach ($ceritakiri as $item)
                                <div class="flex mb-8 mt-2 transform transition duration-300 hover:scale-105">
                                    <div class="w-3/5 pr-2 ml-4">
                                        <img src="{{ asset('storage/cerita/' . $item->foto) }}" alt="Placeholder"
                                            class="w-full h-full object-cover aspect-square">
                                    </div>
                                    <div class="w-2/3">
                                        <a href="{{route('user.ceritadetail', $item->id)}}">
                                            <p class="text-base md:text-lg font-semibold">{{ $item->judul_cerita }}
                                            </p>
                                            <p class="text-sm md:text-base text-gray-700">
                                                {{ \Illuminate\Support\Str::limit($item->isi_cerita, 160, '...') }}</p>
                                        </a>
                                        <br>
                                            <p class="text-xs break-words font-semibold overflow-hidden">
                                             Jurusan :
                                             {{ $item->jurusan }}
                                            </p>
                                            <p class="text-xs break-words font-semibold overflow-hidden">
                                            Angkatan :
                                            {{ $item->angkatan }}
                                            </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Section Kanan -->
                        <div class="w-full md:w-1/2 bg-[#fefefe] px-8 md:px-6 py-4">
                            @foreach ($ceritakanan as $item)
                                <div class="flex mb-8 mt-2 transform transition duration-300 hover:scale-105">
                                    <div class="w-3/5 pr-2 ml-4">
                                        <img src="{{ asset('storage/cerita/' . $item->foto) }}" alt="Placeholder"
                                            class="w-full h-full object-cover aspect-square">
                                    </div>
                                    <div class="w-2/3">
                                        <a href="{{route('user.ceritadetail', $item->id)}}">
                                            <p class="text-base md:text-lg font-semibold">{{ $item->judul_cerita }}
                                            </p>
                                            <p class="text-sm md:text-base text-gray-700">
                                                {{ \Illuminate\Support\Str::limit($item->isi_cerita, 160, '...') }}
                                            </p>
                                            <br>
                                            <p class="text-xs break-words font-semibold overflow-hidden">
                                             Jurusan :
                                             {{ $item->jurusan }}
                                            </p>
                                            <p class="text-xs break-words font-semibold overflow-hidden">
                                            Angkatan :
                                            {{ $item->angkatan }}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                </section>
                <!-- ====== Story Section End -->

            </div>
        </div>

        <!-- Menampilkan footer -->
        {!! $footer !!}
</body>

</html>
