<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IKA UNDIP</title>
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/tailwind.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script defer src="{{ asset('asset/js/alpine.min.js') }}"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <style>
        @keyframes slideAnimation {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .slider-container {
            overflow: hidden;
            white-space: nowrap;
        }

        .slider-content {
            display: flex;
            animation: slideAnimation 20s linear infinite;
        }

        .slider-item {
            flex: 0 0 auto;
            width: 20%;
            height: 16rem;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    {!! $navbar !!}

    <!-- ======Banner Gallery Start -->
    <section class="banner relative font-[montserrat]">
        <div id="banner" class="h-[600px] bg-cover bg-center flex justify-center items-center">
            <div class="absolute inset-0 bg-stone-800 opacity-70"></div> <!-- Overlay transparan -->
            <div class="container mx-auto text-center mt-6 relative items-center">
                <h1 class="text-[20px] mt-14 text-white">Galeri</h1>
                <p class="text-6xl text-white">Dinding Kenangan</p>
            </div>
        </div>
    </section>

    <script>
        const banner = document.getElementById('banner');

        let index = 0;
        setInterval(() => {
            banner.style.backgroundImage = `url('{{ asset('asset/images/im1.svg') }}')`;
        });
    </script>
    <!-- ======Banner Gallery End -->

    <!-- Slider Section -->
    <section id="slider" class="mb-2 h-auto font-[poppins]">
        <div class="slider-container mx-auto mt-2">
            <div class="slider-content">
                @foreach ($kenanganslider as $item)
                    <div class="slider-item"
                        style="background-image: url('{{ asset('storage/kenangan/' . $item->foto) }}')"></div>
                @endforeach

                @foreach ($kenanganslider as $item)
                    <div class="slider-item"
                        style="background-image: url('{{ asset('storage/kenangan/' . $item->foto) }}')"></div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Additional Images Section -->
    <section class=" h-auto font-[montserrat]">
        <div class="bg-[#f9f6f2] py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-2xl leading-6 font-semibold text-[#7e5d50] mt-10 mb-16">F O T O</h2>
                </div>
                <div class="mt-10 mb-10">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        @foreach ($kenangan as $item1)
                            @if (!empty($item1->foto))
                                <div class="relative h-64 rounded-lg overflow-hidden group">
                                    <img src="{{ asset('storage/kenangan/' . $item1->foto) }}" alt="Title 1"
                                        class="h-full w-full object-cover rounded-lg">
                                    <div
                                        class="absolute bottom-0 left-0 right-0 bg-[#000000] h-1/4 flex items-center justify-center opacity-0 group-hover:opacity-70 transition-opacity duration-300">
                                        <div class="text-center text-white">
                                            <h3 class="text-lg font-semibold">{{ $item1->title_foto }}</h3>
                                            <p class="mt-1 text-sm">{{ $item1->created_at->format('Y-m-d') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#f9f6f2] py-8 h-auto font-montserrat">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-28">
            <div class="lg:text-center">
                <h2 class="text-2xl leading-6 font-semibold text-[#7e5d50] mt-10 mb-16">V I D E O</h2>
            </div>
            <div class="mt-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($kenangan as $item2)
                        @if (!empty($item2->video))
                            <div
                                class="bg-gray-600 h-64 rounded-lg relative hover:scale-105 transition-scale duration-300 ease-in-out">
                                <video id="video" controls class="w-full h-full object-cover">
                                    <source src="{{ asset('storage/kenangan/' . $item2->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center bg-[#000000] opacity-70 transition-opacity duration-300 ease-in-out hover-opacity pointer-events-none">
                                    <h3 class="text-white text-xl font-semibold mb-2">{{ $item2->title_video }}</h3>
                                    <p class="text-white text-xs">Tanggal Publish:
                                        {{ $item2->created_at->format('Y-m-d') }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>




    <!-- Menampilkan footer -->
    {!! $footer !!}

    <script>
        const videos = document.querySelectorAll('video');

        videos.forEach(function(video) {
            video.addEventListener('play', function() {
                const overlay = this.parentElement.querySelector('.hover-opacity');
                overlay.classList.add('hidden');
            });

            video.addEventListener('pause', function() {
                const overlay = this.parentElement.querySelector('.hover-opacity');
                overlay.classList.remove('hidden');
            });
        });
    </script>
</body>

</html>
