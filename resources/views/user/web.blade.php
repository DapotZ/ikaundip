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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        /* CSS untuk styling custom datalist */
        .swal2-input[list]::-webkit-calendar-picker-indicator {
            display: none;
        }

        .swal2-input[list] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.293 12.95a1 1 0 1 1-1.414-1.414l3-3a1 1 0 0 1 1.414 1.414l-3 3z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10 4a6 6 0 1 0 0 12 6 6 0 0 0 0-12zM4 10a6 6 0 1 1 12 0 6 6 0 0 1-12 0z"></path></svg>');
            background-position: right center;
            background-repeat: no-repeat;
            background-size: 16px 16px;
            border-radius: 4px;
            padding-right: 20px;
        }
    </style>
</head>
<style>
    .bg-semi-transparent {
        background-color: rgba(142, 128, 110, 0.645);
        /* abu-abu dengan opacity 90% */
    }

    #navbar.scrolled {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        /* Blur effect */
    }

    .news-card:hover {
        transform: translateY(-5px);
    }
</style>

<body>

    <!-- Navbar -->
    {!! $navbar !!}

    <!-- Start Banner -->
    <section class="banner relative font-[poppins]">
        <div class="h-screen bg-cover bg-center flex justify-center items-center"
            style="background-image: url('{{ asset('asset/images/astro.svg') }}');">
            <div class="absolute inset-0 bg-black opacity-70"></div> <!-- Overlay transparan -->
            <div class="container mx-auto text-center py-20 relative items-center">
                <h1 class="text-7xl font-bold mt-8 text-white">Ikatan Keluarga Alumni <br> UNDIP KEPRI</h1>
                <p class="mt-4 text-white">Dari Alumni, Oleh Alumni, Untuk Alumni</p>
                <ul>
                    <li>
                        <a href="{{ route('user.register') }}"
                            class="inline-flex items-center justify-center border border-[#9e8f7b] rounded-xl bg-transparant px-6 py-3 mt-8 text-center text-base font-medium text-white hover:bg-[#9e8f7b] lg:px-7 transform transition duration-300 hover:scale-105">
                            Registrasi Alumni
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Banner -->

    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            var logo = document.querySelector('#navbar img'); // Menggunakan querySelector untuk menemukan logo

            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
                navbar.classList.remove('bg-transparent');
                navbar.classList.add('bg-semi-transparent');
                navbar.classList.add('shadow-md');
                logo.src = "{{ asset('asset/images/log.png') }}";
                document.querySelectorAll('#navbar nav a').forEach(function(
                    item) { // Menggunakan querySelectorAll untuk menemukan link

                });
            } else {
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-semi-transparent');
                navbar.classList.remove('shadow-md');
                logo.src = "{{ asset('asset/images/log.png') }}";
                document.querySelectorAll('#navbar nav a').forEach(function(
                    item) { // Menggunakan querySelectorAll untuk menemukan link

                });
            }
        });
    </script>


    <!-- ====== Hero Section Start -->
    <div class="relative bg-white pb-[30px] pt-[90px] lg:pt-[40px]">
        <div class="container mx-auto">
            @if ($errors->any())
                <div class="bg-red  p-4 mb-4 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mx-6 flex flex-wrap items-center ">
                <div class="w-full px-4 lg:w-5/12">
                    <div class="hero-content">
                        <h1
                            class="font-[montserrat] mb-5 text-4xl font-bold !leading-[1.208] text-black sm:text-[42px] lg:text-[40px] xl:text-5xl">
                            Sejarah<br />
                            IKA UNDIP KEPRI
                        </h1>
                        <p class="font-[poppins] mb-8 max-w-[480px] text-black">
                            Website portal ikatan Alumni Universitas Diponegoro sebagai media silaturahmi, komunikasi,
                            dan informasi sesama alumni Universitas Diponegoro di manapun berada.
                        </p>

                    </div>
                </div>
                <div class="hidden px-4 lg:block lg:w-1/12"></div>
                <div class="w-full px-4 lg:w-6/12">
                    <div class="lg:ml-auto lg:text-right">
                        <div class="relative z-10 inline-block pt-8 lg:pt-0">
                            <img src="asset/images/ika.png" alt="hero"
                                class="max-w-full mx-auto lg:max-w-96 lg:ml-auto" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Hero Section End -->

        <!-- ====== About Section Start -->
        <section class="overflow-hidden bg-[#f9f6f2] pb-12 pt-20 lg:pb-[90px] lg:pt-[90px]">
            <div class="container mx-auto">
                <div class="mx-6 flex flex-wrap items-center justify-between">
                    <div class="w-full px-4 lg:w-6/12">
                        <div class="-mx-3 flex items-center sm:-mx-4">
                            <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                <div class="py-3 sm:py-4">
                                    <img src="asset/images/about/1.jpg" alt="" class="w-full rounded-2xl" />
                                </div>
                                <div class="py-3 sm:py-4">
                                    <img src="asset/images/about/2.jpg" alt="" class="w-full rounded-2xl" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                <div class="relative z-10 my-4">
                                    <img src="asset/images/about/graduation.jpg" alt=""
                                        class="w-full rounded-2xl" />
                                    <span class="absolute -bottom-7 -right-7 z-[-1]">
                                        <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="1.66667" cy="104" r="1.66667"
                                                transform="rotate(-90 1.66667 104)" fill="#ffffff" />
                                            <circle cx="16.3333" cy="104" r="1.66667"
                                                transform="rotate(-90 16.3333 104)" fill="#ffffff" />
                                            <circle cx="31" cy="104" r="1.66667"
                                                transform="rotate(-90 31 104)" fill="#ffffff" />
                                            <circle cx="45.6667" cy="104" r="1.66667"
                                                transform="rotate(-90 45.6667 104)" fill="#ffffff" />
                                            <circle cx="60.3334" cy="104" r="1.66667"
                                                transform="rotate(-90 60.3334 104)" fill="#ffffff" />
                                            <circle cx="88.6667" cy="104" r="1.66667"
                                                transform="rotate(-90 88.6667 104)" fill="#ffffff" />
                                            <circle cx="117.667" cy="104" r="1.66667"
                                                transform="rotate(-90 117.667 104)" fill="#ffffff" />
                                            <circle cx="74.6667" cy="104" r="1.66667"
                                                transform="rotate(-90 74.6667 104)" fill="#ffffff" />
                                            <circle cx="103" cy="104" r="1.66667"
                                                transform="rotate(-90 103 104)" fill="#ffffff" />
                                            <circle cx="132" cy="104" r="1.66667"
                                                transform="rotate(-90 132 104)" fill="#ffffff" />
                                            <circle cx="1.66667" cy="89.3333" r="1.66667"
                                                transform="rotate(-90 1.66667 89.3333)" fill="#ffffff" />
                                            <circle cx="16.3333" cy="89.3333" r="1.66667"
                                                transform="rotate(-90 16.3333 89.3333)" fill="#ffffff" />
                                            <circle cx="31" cy="89.3333" r="1.66667"
                                                transform="rotate(-90 31 89.3333)" fill="#ffffff" />
                                            <circle cx="45.6667" cy="89.3333" r="1.66667"
                                                transform="rotate(-90 45.6667 89.3333)" fill="#ffffff" />
                                            <circle cx="60.3333" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 60.3333 89.3338)" fill="#ffffff" />
                                            <circle cx="88.6667" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 88.6667 89.3338)" fill="#ffffff" />
                                            <circle cx="117.667" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 117.667 89.3338)" fill="#ffffff" />
                                            <circle cx="74.6667" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 74.6667 89.3338)" fill="#ffffff" />
                                            <circle cx="103" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 103 89.3338)" fill="#ffffff" />
                                            <circle cx="132" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 132 89.3338)" fill="#ffffff" />
                                            <circle cx="1.66667" cy="74.6673" r="1.66667"
                                                transform="rotate(-90 1.66667 74.6673)" fill="#ffffff" />
                                            <circle cx="1.66667" cy="31.0003" r="1.66667"
                                                transform="rotate(-90 1.66667 31.0003)" fill="#ffffff" />
                                            <circle cx="16.3333" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 16.3333 74.6668)" fill="#ffffff" />
                                            <circle cx="16.3333" cy="31.0003" r="1.66667"
                                                transform="rotate(-90 16.3333 31.0003)" fill="#ffffff" />
                                            <circle cx="31" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 31 74.6668)" fill="#ffffff" />
                                            <circle cx="31" cy="31.0003" r="1.66667"
                                                transform="rotate(-90 31 31.0003)" fill="#ffffff" />
                                            <circle cx="45.6667" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 45.6667 74.6668)" fill="#ffffff" />
                                            <circle cx="45.6667" cy="31.0003" r="1.66667"
                                                transform="rotate(-90 45.6667 31.0003)" fill="#ffffff" />
                                            <circle cx="60.3333" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 60.3333 74.6668)" fill="#ffffff" />
                                            <circle cx="60.3333" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 60.3333 30.9998)" fill="#ffffff" />
                                            <circle cx="88.6667" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 88.6667 74.6668)" fill="#ffffff" />
                                            <circle cx="88.6667" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 88.6667 30.9998)" fill="#ffffff" />
                                            <circle cx="117.667" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 117.667 74.6668)" fill="#ffffff" />
                                            <circle cx="117.667" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 117.667 30.9998)" fill="#ffffff" />
                                            <circle cx="74.6667" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 74.6667 74.6668)" fill="#ffffff" />
                                            <circle cx="74.6667" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 74.6667 30.9998)" fill="#ffffff" />
                                            <circle cx="103" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 103 74.6668)" fill="#ffffff" />
                                            <circle cx="103" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 103 30.9998)" fill="#ffffff" />
                                            <circle cx="132" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 132 74.6668)" fill="#ffffff" />
                                            <circle cx="132" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 132 30.9998)" fill="#ffffff" />
                                            <circle cx="1.66667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 1.66667 60.0003)" fill="#ffffff" />
                                            <circle cx="1.66667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 1.66667 16.3333)" fill="#ffffff" />
                                            <circle cx="16.3333" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 16.3333 60.0003)" fill="#ffffff" />
                                            <circle cx="16.3333" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 16.3333 16.3333)" fill="#ffffff" />
                                            <circle cx="31" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 31 60.0003)" fill="#ffffff" />
                                            <circle cx="31" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 31 16.3333)" fill="#ffffff" />
                                            <circle cx="45.6667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 45.6667 60.0003)" fill="#ffffff" />
                                            <circle cx="45.6667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 45.6667 16.3333)" fill="#ffffff" />
                                            <circle cx="60.3333" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 60.3333 60.0003)" fill="#ffffff" />
                                            <circle cx="60.3333" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 60.3333 16.3333)" fill="#ffffff" />
                                            <circle cx="88.6667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 88.6667 60.0003)" fill="#ffffff" />
                                            <circle cx="88.6667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 88.6667 16.3333)" fill="#ffffff" />
                                            <circle cx="117.667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 117.667 60.0003)" fill="#ffffff" />
                                            <circle cx="117.667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 117.667 16.3333)" fill="#ffffff" />
                                            <circle cx="74.6667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 74.6667 60.0003)" fill="#ffffff" />
                                            <circle cx="74.6667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 74.6667 16.3333)" fill="#ffffff" />
                                            <circle cx="103" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 103 60.0003)" fill="#ffffff" />
                                            <circle cx="103" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 103 16.3333)" fill="#ffffff" />
                                            <circle cx="132" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 132 60.0003)" fill="#ffffff" />
                                            <circle cx="132" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 132 16.3333)" fill="#ffffff" />
                                            <circle cx="1.66667" cy="45.3333" r="1.66667"
                                                transform="rotate(-90 1.66667 45.3333)" fill="#ffffff" />
                                            <circle cx="1.66667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 1.66667 1.66683)" fill="#ffffff" />
                                            <circle cx="16.3333" cy="45.3333" r="1.66667"
                                                transform="rotate(-90 16.3333 45.3333)" fill="#ffffff" />
                                            <circle cx="16.3333" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 16.3333 1.66683)" fill="#ffffff" />
                                            <circle cx="31" cy="45.3333" r="1.66667"
                                                transform="rotate(-90 31 45.3333)" fill="#ffffff" />
                                            <circle cx="31" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 31 1.66683)" fill="#ffffff" />
                                            <circle cx="45.6667" cy="45.3333" r="1.66667"
                                                transform="rotate(-90 45.6667 45.3333)" fill="#ffffff" />
                                            <circle cx="45.6667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 45.6667 1.66683)" fill="#ffffff" />
                                            <circle cx="60.3333" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 60.3333 45.3338)" fill="#ffffff" />
                                            <circle cx="60.3333" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 60.3333 1.66683)" fill="#ffffff" />
                                            <circle cx="88.6667" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 88.6667 45.3338)" fill="#ffffff" />
                                            <circle cx="88.6667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 88.6667 1.66683)" fill="#ffffff" />
                                            <circle cx="117.667" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 117.667 45.3338)" fill="#ffffff" />
                                            <circle cx="117.667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 117.667 1.66683)" fill="#ffffff" />
                                            <circle cx="74.6667" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 74.6667 45.3338)" fill="#ffffff" />
                                            <circle cx="74.6667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 74.6667 1.66683)" fill="#ffffff" />
                                            <circle cx="103" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 103 45.3338)" fill="#ffffff" />
                                            <circle cx="103" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 103 1.66683)" fill="#ffffff" />
                                            <circle cx="132" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 132 45.3338)" fill="#ffffff" />
                                            <circle cx="132" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 132 1.66683)" fill="#ffffff" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <div class="mt-10 lg:mt-0">
                            <span class="font-[montserrat] mb-4 block text-lg font-semibold text-[#7e5d50]">
                                Tentang Kami
                            </span>
                            <h2 class="font-[montserrat] mb-5 text-3xl font-bold text-black sm:text-[40px]/[48px]">
                                Portal Ikatan Alumni UNDIP.
                            </h2>
                            <p class="font-[poppins] mb-5 text-black">
                                Website portal ikatan Alumni Universitas Diponegoro sebagai media silaturahmi,
                                komunikasi,
                                dan informasi sesama alumni Universitas Diponegoro di manapun berada.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== About Section End -->

        <!-- ====== Services Section Start -->
        <section class="pb-12 pt-20 bg-white lg:pb-[90px] lg:pt-[120px]" id="layanan">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
                            <h3 class="mb-3 font-semibold leading-[1.2] text-[#7e5d50] text-[40px] font-[Montserrat]">
                                LAYANAN
                            </h3>
                            <p class="font-[poppins] text-black">
                                Beberapa Layanan dari portal website kami
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mx-4 flex flex-wrap ">
                    <div class="w-full px-6 md:w-1/2 lg:w-1/3 sm:w-1/2">
                        <div
                            class="mb-8 rounded-[15px] bg-[#fefefe] border border-[#a66f6f] p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 transform transition duration-300 hover:scale-105">
                            <div class="mb-5 flex items-center justify-center mx-auto">
                                <svg width="48" height="48" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.0375 1.2374C11.8125 -0.393851 2.92503 5.7374 1.29378 14.9624C0.450029 19.4061 1.46253 23.9624 4.05003 27.6749C6.63753 31.4436 10.5188 33.9186 14.9625 34.7624C15.975 34.9311 16.9875 35.0436 18 35.0436C26.0438 35.0436 33.2438 29.2499 34.7625 21.0374C36.3938 11.8124 30.2625 2.9249 21.0375 1.2374ZM32.2313 20.5874C32.175 21.0374 32.0625 21.4874 31.95 21.8811L19.2375 17.0999V3.5999C19.6875 3.65615 20.1375 3.7124 20.5313 3.76865C28.4063 5.1749 33.6375 12.7124 32.2313 20.5874ZM16.7063 3.5999V16.7624H3.60003C3.65628 16.3124 3.71253 15.8624 3.76878 15.4124C4.95003 8.83115 10.4063 4.10615 16.7063 3.5999ZM15.4125 32.2311C11.5875 31.5561 8.32503 29.4186 6.13128 26.2124C4.66878 24.1311 3.82503 21.7124 3.60003 19.2374H17.775L31.05 24.2436C28.2938 29.9811 21.9375 33.4686 15.4125 32.2311Z"
                                        fill="#78938a" />
                                </svg>
                            </div>
                            <h4 class="mb-[14px] text-2xl font-semibold text-black text-center">
                                Pemutakhiran Data
                            </h4>
                            <p class="text-black text-center">
                                Memperkuat jaringan alumni Undip diseluruh indonesia.
                            </p>
                        </div>
                    </div>
                    <div class="w-full px-6 md:w-1/2 lg:w-1/3 sm:w-1/2">
                        <div
                            class="mb-5 rounded-[15px] bg-[#fefefe] border border-[#a66f6f] p-10 shadow-md hover:shadow-lg hover:bg-[] md:px-7 xl:px-10 transform transition duration-300 hover:scale-105">
                            <div class="mb-5 flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10A1 1 0 0 0 3 14h2v7a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669zM12 16a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                                        fill="#9dad7f">
                                </svg>
                            </div>
                            <h4 class="mb-[14px] text-2xl font-semibold text-black text-center">
                                Rumah Alumni
                            </h4>
                            <p class="text-black text-center">
                                Menjadi wadah bagi para alumni Undip yang berdomisili di KEPRI.
                            </p>
                        </div>
                    </div>
                    <div class="w-full px-6 md:w-1/2 lg:w-1/3 sm:w-1/2">
                        <div
                            class="mb-5 rounded-[15px] bg-[#fefefe] border border-[#a66f6f] p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 transform transition duration-300 hover:scale-105">
                            <div class="mb-5 flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M20.664 3.478 8 8v7l.748.267-1.127 2.254a1.999 1.999 0 0 0 1.156 2.792l4.084 1.361a2.015 2.015 0 0 0 2.421-1.003l1.303-2.606 4.079 1.457A1 1 0 0 0 22 18.581V4.419a1 1 0 0 0-1.336-.941zm-7.171 16.299L9.41 18.416l1.235-2.471 4.042 1.444-1.194 2.388zM4 15h2V8H4c-1.103 0-2 .897-2 2v3c0 1.103.897 2 2 2z"
                                        fill="#a66f6f">
                                </svg>
                            </div>
                            <h4 class="mb-[14px] text-2xl font-semibold text-black text-center">
                                Informasi Kegiatan
                            </h4>
                            <p class="text-black text-center">
                                Menginformasikan secara luas kegiatan yang diselenggarakan oleh IKA UNDIP.
                            </p>
                        </div>
                    </div>

                    <div class="w-full px-6 md:w-1/2 lg:w-1/3 sm:w-1/2">
                        <div
                            class="mb-5 rounded-[15px] bg-[#fefefe] border border-[#a66f6f] p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 transform transition duration-300 hover:scale-105">
                            <div class="mb-5 flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897V12H5.51a15.473 15.473 0 0 1-.544-4.365L12 4.118V12h6.46c-.759 2.74-2.498 5.979-6.46 7.897z"
                                        fill="#94807a">
                                </svg>
                            </div>
                            <h4 class="mb-[14px] text-2xl font-semibold text-black text-center">
                                Citra Almamater
                            </h4>
                            <p class="text-black text-center">
                                Membangun citra baik almamater di berbagai lini kehidupan bermasyarakat.
                            </p>
                        </div>
                    </div>
                    <div class="w-full px-6 md:w-1/2 lg:w-1/3 sm:w-1/2">
                        <div
                            class="mb-5 rounded-[15px] bg-[#fefefe] border border-[#a66f6f] p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 transform transition duration-300 hover:scale-105">
                            <div class="mb-5 flex items-center justify-center mx-auto">
                                <svg width="48" height="48" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.0937 21.8251L29.6437 21.6001L30.2062 21.2626C31.3312 20.5876 31.95 19.4063 31.95 18.0563C31.95 16.7626 31.2187 15.5813 30.0937 14.9063L28.9125 14.2313L30.2062 13.4438C31.3312 12.7688 31.95 11.5876 31.95 10.2376C31.95 8.94385 31.2187 7.7626 30.0937 7.14385L19.9125 1.4626C18.7875 0.843848 17.3812 0.843848 16.3125 1.4626L5.84999 7.5376C4.72499 8.2126 4.04999 9.39385 4.04999 10.6876C4.04999 11.9813 4.72499 13.2188 5.84999 13.8376L7.08749 14.5688L5.84999 15.3001C4.72499 15.9751 4.04999 17.1563 4.04999 18.4501C4.04999 19.7438 4.72499 20.9813 5.84999 21.6001L6.35624 21.8813L5.84999 22.1626C4.72499 22.8376 3.99374 24.0188 3.99374 25.3126C3.99374 26.6626 4.66874 27.8438 5.79374 28.4626L16.1437 34.4813C16.7062 34.8188 17.325 34.9876 18 34.9876C18.675 34.9876 19.35 34.8188 19.9125 34.4251L30.2625 28.1251C31.3875 27.4501 32.0062 26.2688 32.0062 24.9188C31.95 23.6251 31.275 22.4438 30.0937 21.8251ZM6.52499 10.6876C6.52499 10.5188 6.58124 10.0126 7.08749 9.73135L17.55 3.65635C17.8875 3.43135 18.3375 3.43135 18.675 3.65635L28.9125 9.3376C29.4187 9.61885 29.475 10.1251 29.475 10.2938C29.475 10.4626 29.4187 10.9688 28.9125 11.3063L18.6187 17.6626C18.2812 17.8876 17.8312 17.8876 17.4375 17.6626L7.08749 11.6438C6.58124 11.3626 6.52499 10.8563 6.52499 10.6876ZM7.08749 17.4938L9.56249 16.0313L16.1437 19.8563C16.7062 20.1938 17.325 20.3626 18 20.3626C18.675 20.3626 19.35 20.1938 19.9125 19.8001L26.4375 15.8063L28.8562 17.1563C29.3625 17.4376 29.4187 17.9438 29.4187 18.1126C29.4187 18.2813 29.3625 18.7876 28.8562 19.1251L18.6187 25.4251C18.2812 25.6501 17.8312 25.6501 17.4375 25.4251L7.08749 19.4063C6.58124 19.1251 6.52499 18.6188 6.52499 18.4501C6.52499 18.2813 6.58124 17.7751 7.08749 17.4938ZM28.9125 25.9876L18.6187 32.3438C18.2812 32.5688 17.8312 32.5688 17.4375 32.3438L7.08749 26.3251C6.58124 26.0438 6.52499 25.5376 6.52499 25.3688C6.52499 25.2001 6.58124 24.6938 7.08749 24.4126L8.83124 23.4001L16.2 27.6751C16.7625 28.0126 17.3812 28.1813 18.0562 28.1813C18.7312 28.1813 19.4062 28.0126 19.9687 27.6188L27.225 23.1751L28.9125 24.0751C29.4187 24.3563 29.475 24.8626 29.475 25.0313C29.475 25.2001 29.4187 25.7063 28.9125 25.9876Z"
                                        fill="#e5c185" />
                                </svg>
                            </div>
                            <h4 class="mb-[14px] text-2xl font-semibold text-black text-center">
                                Sarana Berkarya
                            </h4>
                            <p class="text-black text-center">
                                Mengaplikasikan keilmuan dalam kehidupan bermasyarakat.
                            </p>
                        </div>
                    </div>
                    <div class="w-full px-6 md:w-1/2 lg:w-1/3 sm:w-1/2">
                        <div
                            class="mb-5 rounded-[15px] bg-[#fefefe] border border-[#a66f6f] p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 transform transition duration-300 hover:scale-105">
                            <div class="mb-5 flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm1.5 1H8c-3.309 0-6 2.691-6 6v1h15v-1c0-3.309-2.691-6-6-6"
                                        fill="#557174"></path>
                                    <path
                                        d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"
                                        fill="#557174"></path>
                                </svg>
                            </div>
                            <h4 class="mb-[14px] text-2xl font-semibold text-black text-center">
                                Kegiatan Sosial
                            </h4>
                            <p class="text-black text-center">
                                Aktif membantu dalam berbagai kegiatan sosial.
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- ====== Services Section End -->


        <!-- ====== Portfolio Section Start -->
        {{-- <section x-data="{
        showCards: 'all',
        activeClasses: 'bg-white text-black',
        inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
    }" class="pb-12 pt-20 lg:pb-[90px] lg:pt-[120px] bg-[#f9f6f2]" id="kegiatan">
        <div class="container mx-auto">
            <div class="mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                        <span class="font-[Montserrat] mb-2 block text-4xl font-bold text-black ">
                            GALERI
                        </span>
                        <div class="mt-10">
                            <a href="{{ route('user.galeri') }}"
                                class="rounded-xl bg-stone-800 px-6 py-3 text-center text-base font-medium text-white hover:bg-stone-700 ">Lihat
                                Semua</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-4 flex flex-wrap justify-center">
                @foreach ($gallerys as $gallery)
                    <div :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden'"
                        class="w-full px-4 md:w-1/2 xl:w-1/3">
                        <div class="relative mb-12">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('storage/gallery/' . $gallery->photo) }}" alt="portfolio"
                                    class="w-full" />
                            </div>
                            <div
                                class="relative z-10 mx-7 -mt-20 rounded-lg bg-stone-700 px-3 py-[34px] text-center shadow-portfolio ">
                                <h3 class="mb-5 text-xl font-bold text-white">
                                    {{ $gallery->nama_kegiatan }}
                                </h3>
                                <div>
                                    <span class="absolute bottom-0 left-0">
                                        <svg width="61" height="30" viewBox="0 0 61 30"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="16" cy="45" r="45" fill="#ffffff"
                                                fill-opacity="0.11" />
                                        </svg>
                                    </span>
                                    <span class="absolute right-0 top-0">
                                        <svg width="20" height="25" viewBox="0 0 20 25"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="0.706257" cy="24.3533" r="0.646687"
                                                transform="rotate(-90 0.706257 24.3533)" fill="#ffffff" />
                                            <circle cx="6.39669" cy="24.3533" r="0.646687"
                                                transform="rotate(-90 6.39669 24.3533)" fill="#ffffff" />
                                            <circle cx="12.0881" cy="24.3533" r="0.646687"
                                                transform="rotate(-90 12.0881 24.3533)" fill="#ffffff" />
                                            <circle cx="17.7785" cy="24.3533" r="0.646687"
                                                transform="rotate(-90 17.7785 24.3533)" fill="#ffffff" />
                                            <circle cx="0.706257" cy="18.6624" r="0.646687"
                                                transform="rotate(-90 0.706257 18.6624)" fill="#ffffff" />
                                            <circle cx="6.39669" cy="18.6624" r="0.646687"
                                                transform="rotate(-90 6.39669 18.6624)" fill="#ffffff" />
                                            <circle cx="12.0881" cy="18.6624" r="0.646687"
                                                transform="rotate(-90 12.0881 18.6624)" fill="#ffffff" />
                                            <circle cx="17.7785" cy="18.6624" r="0.646687"
                                                transform="rotate(-90 17.7785 18.6624)" fill="#ffffff" />
                                            <circle cx="0.706257" cy="12.9717" r="0.646687"
                                                transform="rotate(-90 0.706257 12.9717)" fill="#ffffff" />
                                            <circle cx="6.39669" cy="12.9717" r="0.646687"
                                                transform="rotate(-90 6.39669 12.9717)" fill="#ffffff" />
                                            <circle cx="12.0881" cy="12.9717" r="0.646687"
                                                transform="rotate(-90 12.0881 12.9717)" fill="#ffffff" />
                                            <circle cx="17.7785" cy="12.9717" r="0.646687"
                                                transform="rotate(-90 17.7785 12.9717)" fill="#ffffff" />
                                            <circle cx="0.706257" cy="7.28077" r="0.646687"
                                                transform="rotate(-90 0.706257 7.28077)" fill="#ffffff" />
                                            <circle cx="6.39669" cy="7.28077" r="0.646687"
                                                transform="rotate(-90 6.39669 7.28077)" fill="#ffffff" />
                                            <circle cx="12.0881" cy="7.28077" r="0.646687"
                                                transform="rotate(-90 12.0881 7.28077)" fill="#ffffff" />
                                            <circle cx="17.7785" cy="7.28077" r="0.646687"
                                                transform="rotate(-90 17.7785 7.28077)" fill="#ffffff" />
                                            <circle cx="0.706257" cy="1.58989" r="0.646687"
                                                transform="rotate(-90 0.706257 1.58989)" fill="#ffffff" />
                                            <circle cx="6.39669" cy="1.58989" r="0.646687"
                                                transform="rotate(-90 6.39669 1.58989)" fill="#ffffff" />
                                            <circle cx="12.0881" cy="1.58989" r="0.646687"
                                                transform="rotate(-90 12.0881 1.58989)" fill="#ffffff" />
                                            <circle cx="17.7785" cy="1.58989" r="0.646687"
                                                transform="rotate(-90 17.7785 1.58989)" fill="#ffffff" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Portfolio Section End -->


    <!-- ====== Blog Section Start -->
    <section class=" pb-10 pt-20 lg:pb-20 lg:pt-[120px]" id="news">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-white">
                            Berita IKA UNDIP
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[30px]">
                            Kumpulan Portal Berita IKA Undip
                        </h2>
                        <div class="mt-10">
                            <a href="{{ route('user.news') }}"
                                class="rounded-xl bg-stone-800 px-6 py-3 text-center text-base font-medium text-white hover:bg-stone-700">Lihat
                                Semua</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-4 flex flex-wrap justify-center">
                @foreach ($news as $new)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mb-10 w-full">
                            <div class="mb-8 overflow-hidden rounded">
                                <img src="{{ asset('storage/news/' . $new->foto) }}" alt="image" class="w-full" />
                            </div>
                            <div>
                                <span
                                    class="mb-5 inline-block rounded bg-stone-700 px-4 py-1 text-center text-xs font-semibold leading-loose text-white mx-4 flex flex-wrap justify-center">
                                    {{ $new->tanggal }}
                                </span>
                                <h3>
                                    <a href="{{ route('user.blog', $new->id) }}"
                                        class="mb-4 inline-block text-xl bg-stone-700 font-semibold text-dark hover:text-primary text-white sm:text-2xl lg:text-xl xl:text-2xl mx-4 flex flex-wrap justify-center">
                                        {{ $new->judul }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
        <!-- ====== Blog Section End -->


        <!-- ====== Gallery Foto Section Start -->
        <section id="gallery" class="py-10 font-[montserrat] relative"
            style="background-image: url('{{ asset('asset/images/img3.svg') }}');">
            <div class="absolute top-0 left-0 w-full h-full bg-stone-700 opacity-70"></div>
            <div class="container mx-auto relative flex flex-col sm:flex-row">
                <!-- Div Kiri untuk Teks Galeri -->
                <div class="w-full sm:w-1/3 flex flex-col mt-16 ml-8 order-1 sm:order-none">
                    <h1 class="text-[20px] text-[#f9f6f2] font-thin mb-2">G A L L E R Y</h1>
                    <p class="font-[poppins] text-6xl text-[#f9f6f2] mb-2">
                        Dinding Kenangan
                    </p>
                    <div class="mt-5">
                        <a href="{{ route('user.galeri') }}" <button
                            class="w-[250px] border-2 border-[#9e8f7b] rounded-xl px-6 py-2 ml-1 text-center text-white hover:bg-[#9e8f7b] transform transition duration-300 hover:scale-105">
                            Lihat Semua
                            </button>
                            <a />
                    </div>
                </div>


                <!-- Div Kanan untuk Slider Image -->
                <div class="w-full sm:w-2/3 mt-16 mb-16 order-2 sm:order-none">
                    <!-- Swiper -->
                    <div class="swiper mySwiper w-full">
                        <div class="swiper-wrapper">
                            @foreach ($kenangan as $kenangan)
                                <div class="swiper-slide">
                                    <a href="{{ route('user.galeri') }}" target="_blank">
                                        <div class="image-container w-full h-60 overflow-hidden">
                                            <img class="w-full h-full object-cover"
                                                src="{{ asset('storage/kenangan/' . $kenangan->foto) }}"
                                                alt="Gallery Image">
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            <!-- Add more slides as needed -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        <div class="swiper-button-next text-[#9e8f7b]"></div>
                        <div class="swiper-button-prev text-[#9e8f7b]"></div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .swiper-slide {
                transition: transform 0.5s ease-in-out;
            }

            .swiper-slide-prev,
            .swiper-slide-next {
                transform: scale(0.5);
            }

            .swiper-slide-active {
                transform: scale(2);

            }
        </style>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var swiper = new Swiper('.mySwiper', {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    loop: true,
                    autoplay: {
                        delay: 2100, // 2 detik
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    effect: 'coverflow',
                    coverflowEffect: {
                        rotate: 5, // Sudut rotasi
                        stretch: 0, // Jarak antar slide dalam effect
                        depth: 200, // Kedalaman efek
                        modifier: 2, // Modifikasi keparahan efek
                        slideShadows: true, // Bayangan slide
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        1024: {
                            slidesPerView: 5,
                            spaceBetween: 10,
                        },
                    },
                });
            });
        </script>
        <!-- ====== Gallery Foto Section End -->


        <!-- ====== Gallery Video Section Start -->
        {{-- <section class="bg-stone-200">
        <div class="container mx-auto mb-10 relative ">
            <!-- Video Section -->
            <div class="grid grid-cols-2 gap-2 ">

                <div class="relative w-auto h-auto overflow-hidden bg-black shadow-lg mt-5 mb-5">
                    <div class="absolute top-0 left-0 bg-black bg-opacity-50 text-white px-2 py-1 rounded-b-lg">Aclass Video</div>
                    <video class="w-full h-full object-cover" controls>
                        <source src="asset/images/videos/aclass.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="grid grid-rows-2 gap-2 mt-5 mb-5">
                    <div class="relative w-auto h-auto overflow-hidden bg-black shadow-lg">
                        <div class="absolute top-0 left-0 bg-black bg-opacity-50 text-white px-2 py-1 rounded-b-lg">OP Video</div>
                        <video class="w-full h-full" controls>
                            <source src="asset/images/videos/op.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="relative w-auto h-auto overflow-hidden bg-black shadow-lg">
                        <div class="absolute top-0 left-0 bg-black bg-opacity-50 text-white px-2 py-1 rounded-b-lg">Haikyu Video</div>
                        <video class="w-full h-full" controls>
                            <source src="asset/images/videos/haikyu.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- ====== Gallery Video Section End -->


        <!-- ====== Team Section Start -->
        {{-- <section class="pb-10 pt-20 lg:pb-20 lg:pt-[120px]" id="alumni">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-stone-800">
                            Alumni
                        </span>
                        <h2 class="mb-3 text-3xl font-bold leading-[1.2] sm:text-4xl md:text-[30px]">
                            Profile Alumni IKA Undip
                        </h2>
                        <div class="mt-10">
                            <a href="{{ route('user.alumni') }}"
                                class="rounded-xl bg-stone-800 px-6 py-3 text-center text-base font-medium text-white hover:bg-stone-700">Lihat
                                Semua</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-4 flex flex-wrap justify-center">
                @foreach ($alumnus as $alumni)
                    <div class="w-full px-4 md:w-1/2 xl:w-1/4">
                        <div class="mx-auto mb-10 w-full max-w-[370px]">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{ asset('storage/alumnus/' . $alumni->foto) }}" alt="image"
                                    class="w-full" />
                                <div class="absolute bottom-5 left-0 w-full text-center">
                                    <div class="relative mx-5 overflow-hidden rounded-lg bg-stone-700 px-3 py-5">
                                        <h3 class="nama font-bold text-body-color dark:text-dark-6" ">
                                            {{ $alumni->name }}
                                        </h3>
                                        <p class="text-xs text-body-color dark:text-dark-6">
                                            {{ $alumni->nim }}
                                        </p>
                                        <div>
                                            <span class="absolute bottom-0 left-0">
                                                <svg width="61" height="30" viewBox="0 0 61 30"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="16" cy="45" r="45" fill="#ffffff"
                                                        fill-opacity="0.11" />
                                                </svg>
                                            </span>
                                            <span class="absolute right-0 top-0">
                                                <svg width="20" height="25" viewBox="0 0 20 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="0.706257" cy="24.3533" r="0.646687"
                                                        transform="rotate(-90 0.706257 24.3533)" fill="#ffffff" />
                                                    <circle cx="6.39669" cy="24.3533" r="0.646687"
                                                        transform="rotate(-90 6.39669 24.3533)" fill="#ffffff" />
                                                    <circle cx="12.0881" cy="24.3533" r="0.646687"
                                                        transform="rotate(-90 12.0881 24.3533)" fill="#ffffff" />
                                                    <circle cx="17.7785" cy="24.3533" r="0.646687"
                                                        transform="rotate(-90 17.7785 24.3533)" fill="#ffffff" />
                                                    <circle cx="0.706257" cy="18.6624" r="0.646687"
                                                        transform="rotate(-90 0.706257 18.6624)" fill="#ffffff" />
                                                    <circle cx="6.39669" cy="18.6624" r="0.646687"
                                                        transform="rotate(-90 6.39669 18.6624)" fill="#ffffff" />
                                                    <circle cx="12.0881" cy="18.6624" r="0.646687"
                                                        transform="rotate(-90 12.0881 18.6624)" fill="#ffffff" />
                                                    <circle cx="17.7785" cy="18.6624" r="0.646687"
                                                        transform="rotate(-90 17.7785 18.6624)" fill="#ffffff" />
                                                    <circle cx="0.706257" cy="12.9717" r="0.646687"
                                                        transform="rotate(-90 0.706257 12.9717)" fill="#ffffff" />
                                                    <circle cx="6.39669" cy="12.9717" r="0.646687"
                                                        transform="rotate(-90 6.39669 12.9717)" fill="#ffffff" />
                                                    <circle cx="12.0881" cy="12.9717" r="0.646687"
                                                        transform="rotate(-90 12.0881 12.9717)" fill="#ffffff" />
                                                    <circle cx="17.7785" cy="12.9717" r="0.646687"
                                                        transform="rotate(-90 17.7785 12.9717)" fill="#ffffff" />
                                                    <circle cx="0.706257" cy="7.28077" r="0.646687"
                                                        transform="rotate(-90 0.706257 7.28077)" fill="#ffffff" />
                                                    <circle cx="6.39669" cy="7.28077" r="0.646687"
                                                        transform="rotate(-90 6.39669 7.28077)" fill="#ffffff" />
                                                    <circle cx="12.0881" cy="7.28077" r="0.646687"
                                                        transform="rotate(-90 12.0881 7.28077)" fill="#ffffff" />
                                                    <circle cx="17.7785" cy="7.28077" r="0.646687"
                                                        transform="rotate(-90 17.7785 7.28077)" fill="#ffffff" />
                                                    <circle cx="0.706257" cy="1.58989" r="0.646687"
                                                        transform="rotate(-90 0.706257 1.58989)" fill="#ffffff" />
                                                    <circle cx="6.39669" cy="1.58989" r="0.646687"
                                                        transform="rotate(-90 6.39669 1.58989)" fill="#ffffff" />
                                                    <circle cx="12.0881" cy="1.58989" r="0.646687"
                                                        transform="rotate(-90 12.0881 1.58989)" fill="#ffffff" />
                                                    <circle cx="17.7785" cy="1.58989" r="0.646687"
                                                        transform="rotate(-90 17.7785 1.58989)" fill="#ffffff" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
        <!-- ====== Team Section End -->

        <section id="event" class="py-5 bg-[#f9f6f2] min-h-auto">
            <div class="container mx-auto md:px-10">
                <div class="w-full mb-10 relative">
                    <h1 class="text-4xl font-semibold text-[#7e5d50] mt-20 mb-2 font-[montserrat] inline-block">Berita
                    </h1>
                    <span class="absolute top-0 right-0 mt-24 mr-4 text-gray-500 hover:text-[#924144]">
                        <a href="{{ route('user.news') }}">Lihat Semua</a>
                    </span>
                    <hr class="border border-[#7e5d50] w-full mx-auto mb-20">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 justify-center mb-28">
                    @php
                        use Carbon\Carbon;
                    @endphp
                    @foreach ($news as $news)
                        <a href="{{ route('user.blog', $news->id) }}"
                            class="block group relative bg-white overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                            <img src="{{ asset('storage/news/' . $news->foto) }}" alt="Berita 4"
                                class="w-full h-52 object-cover">
                            <div class="p-4">
                                <h3
                                    class="text-lg font-semibold text-gray-800 transition duration-300">
                                    {{ $news->judul }}</h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    {{ \Illuminate\Support\Str::limit($news->isi, 100, '...') }}</p>
                                <p class="text-sm text-gray-600 mt-6">
                                    {{ Carbon::parse($news->tanggal)->isoFormat('D MMMM YYYY') }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ====== Event Section Start -->
        <section id="event" class="py-5 bg-[#f9f6f2] min-h-auto">
            <div class="container mx-auto md:px-10">
                <div class="w-full mb-10 relative">
                    <h1 class="text-4xl font-semibold text-[#7e5d50] mt-20 mb-2 font-[montserrat] inline-block">Acara
                    </h1>
                    <span class="absolute top-0 right-0 mt-24 mr-4 text-gray-500 hover:text-[#924144]"><a
                            href="{{ route('user.acara') }}">Lihat Semua</a></span>
                    <hr class="border border-[#7e5d50] w-full mx-auto mb-20">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 justify-center mb-28">
                    @foreach ($gallerys as $gallerys)
                        <a href="{{ route('user.acara') }}">
                            <div
                                class="bg-white relative shadow-lg rounded-lg transform transition duration-300 hover:scale-105 break-words overflow-hidden">
                                <img class="w-full max-h-[200px] object-cover mb-5 object-cover aspect-square"
                                    src="{{ asset('storage/gallery/' . $gallerys->photo) }}" alt="about-us-image">
                                <div class="px-6 py-6">
                                    <h3
                                    class="text-lg font-semibold text-gray-800 group-hover:text-blue-500 transition duration-300">
                                    {{ $gallerys->nama_kegiatan }}
                                     </h3>
                                     <br>
                                    <p class="text-sm font-semibold break-words overflow-hidden mb-2">
                                        {{ \Illuminate\Support\Str::limit($gallerys->detail_kegiatan, 100, '...') }}
                                    </p>
                                    <p class="text-sm break-words overflow-hidden">
                                        Hari/Tanggal :
                                        {{ Carbon::parse($gallerys->start)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                    </p>
                                    <p class="text-sm break-words overflow-hidden">
                                        Jam : {{ Carbon::parse($gallerys->start_time)->format('H:i') }} -
                                        {{ Carbon::parse($gallerys->end_time)->format('H:i') }}
                                    </p>
                                    <p class="text-sm break-words overflow-hidden">
                                        Tempat : {{ $gallerys->lokasi }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ====== Event Section End -->

        <!-- ====== Story Section Start -->
        <section id="alumni-story" class="relative min-h-auto">
            <div class="flex flex-wrap w-full h-full">
                <!-- Section Kiri -->
                <div class="w-full md:w-1/2 bg-cover bg-center relative"
                    style="background-image: url('{{ asset('asset/images/img4.svg') }}');">
                    <div class="absolute inset-0 bg-stone-700 opacity-70"></div>
                    <div class="relative z-10 px-10 md:px-6 py-20 ml-16 mt-6">
                        <h1 class="font-[montserrat] text-[#f9f6f2] mb-2 ml-1 font-thin">
                            <span>C E R I T A&nbsp;&nbsp;&nbsp;A L U M N I</span>
                        </h1>
                        <h1 class="text-6xl text-[#f9f6f2] font-[Montserrat]">Apa Kata <br> Mereka? </h1>
                        <div class="mt-10 w-full">
                            <a href="{{ route('user.cerita') }}" <button
                                class="border-2 border-[#9e8f7b] rounded-xl px-6 py-2 mt-2 ml-1 text-center text-white hover:bg-[#9e8f7b] transform transition duration-300 hover:scale-105">
                                Lihat Semua
                            </a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Section Kanan -->
                <div class="w-full md:w-1/2 bg-[#fefefe] px-8 md:px-6 py-4">
                    @foreach ($cerita as $cerita)
                        <div class="flex mb-2 mt-2 transform transition duration-300 hover:scale-105">
                            <div class="w-1/5 pr-2 ml-4">
                                <img src="{{ asset('storage/cerita/' . $cerita->foto) }}" alt="Placeholder"
                                    class="w-full h-full object-cover aspect-square">
                            </div>
                            <div class="w-2/3">
                                <a href="{{ route('user.ceritadetail', $cerita->id) }}">
                                    <p class="text-base md:text-lg font-semibold">{{ $cerita->judul_cerita }}
                                    </p>
                                    <p class="text-sm md:text-base text-gray-700">
                                        {{ \Illuminate\Support\Str::limit($cerita->isi_cerita, 160, '...') }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ====== Story Section End -->

        <!-- ====== Alumni Section Start -->
        <section id="alumni" class="py-5 h-auto bg-[#f9f6f2] font-[poppins]">
            <div class="container mx-auto px-4 py-28">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                            <span class="mb-2 block text-4xl font-semibold text-[#7e5d50] font-[Montserrat]">
                                ALUMNI
                            </span>
                            <h class="mb-3 leading-[1.2] font-[poppins]">
                                Profil Anggota Alumni IKA
                            </h>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                    @foreach ($alumni as $alumni)
                        <div class="bg-stone-500 rounded-lg shadow-md overflow-hidden">
                            <div class="bg-white p-4">
                                <div class="text-center mb-1">
                                    <img src="{{ asset('storage/alumnus/' . $alumni->foto) }}" alt="Foto Profil"
                                        class="mx-auto rounded-full w-40 h-40">
                                    <p class="mt-5 font-semibold">{{ $alumni->name }}</p>
                                    <p class="text-gray-600">{{ $alumni->nim }}</p>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 pt-4 mt-auto text-white">
                                <div class="text-center mb-5">
                                    <p class="font-semibold">FAKULTAS</p>
                                    <p>{{ $alumni->fakultas }}</p>
                                </div>
                                <div class="text-center mb-5">
                                    <p class="font-semibold">JURUSAN</p>
                                    <p>{{ $alumni->jurusan }}</p>
                                </div>
                                <div class="text-center mb-5">
                                    <p class="font-semibold">TAHUN LULUS</p>
                                    <p>{{ $alumni->tahunlulus }}</p>
                                </div>
                                <div class="text-center mb-5">
                                    <p class="font-semibold">PEKERJAAN</p>
                                    <p>{{ $alumni->pekerjaan }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-10 w-full">
                    <a href="{{ route('user.alumni') }}"
                        class="block border-2 border-[#9e8f7b] rounded-lg  px-6 py-2 hover:shadow-lg text-center text-base text-[#9e8f7b]  w-full">
                        Lihat Semua
                    </a>
                </div>
            </div>
        </section>
        <!-- ====== Alumni Section End -->

        <!-- ====== Contact Section Start -->
        <section class="relative overflow-hidden py-20 lg:py-[120px]"
            style="background-image: url('{{ asset('asset/images/im1.svg') }}');">
            <div class="absolute top-0 left-0 w-full h-full bg-stone-700 opacity-70"></div>

            <div class="container mx-auto relative z-10">
                <div class="-mx-4 flex flex-wrap lg:justify-between">
                    <div class="w-full px-4 lg:w-1/2 xl:w-6/12 mt-5">
                        <div class="mb-12 max-w-[570px] lg:mb-0 text-[#f9f6f2] ml-10">
                            <span class="font-[montserrat] mb-2 block font-thin ml-1">
                                KONTAK&nbsp;&nbsp;&nbsp;
                            </span>
                            <h2
                                class="mb-8 text-6xl font-semibold sm:text-[40px] lg:text-[36px] xl:text-[40px] font-[Montserrat]">
                                HUBUNGI KAMI
                            </h2>
                            <div class="mb-8 flex w-full max-w-[370px] ">
                                <div
                                    class="mr-6 flex h-[60px] w-full max-w-[60px] items-center text-black justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill=""
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.6 11.8002L17.7 3.5002C16.65 2.8502 15.3 2.8502 14.3 3.5002L1.39998 11.8002C0.899983 12.1502 0.749983 12.8502 1.04998 13.3502C1.39998 13.8502 2.09998 14.0002 2.59998 13.7002L3.44998 13.1502V25.8002C3.44998 27.5502 4.84998 28.9502 6.59998 28.9502H25.4C27.15 28.9502 28.55 27.5502 28.55 25.8002V13.1502L29.4 13.7002C29.6 13.8002 29.8 13.9002 30 13.9002C30.35 13.9002 30.75 13.7002 30.95 13.4002C31.3 12.8502 31.15 12.1502 30.6 11.8002ZM13.35 26.7502V18.5002C13.35 18.0002 13.75 17.6002 14.25 17.6002H17.75C18.25 17.6002 18.65 18.0002 18.65 18.5002V26.7502H13.35ZM26.3 25.8002C26.3 26.3002 25.9 26.7002 25.4 26.7002H20.9V18.5002C20.9 16.8002 19.5 15.4002 17.8 15.4002H14.3C12.6 15.4002 11.2 16.8002 11.2 18.5002V26.7502H6.69998C6.19998 26.7502 5.79998 26.3502 5.79998 25.8502V11.7002L15.5 5.4002C15.8 5.2002 16.2 5.2002 16.5 5.4002L26.3 11.7002V25.8002Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="mb-1 text-xl font-[montserrat]">
                                        ALAMAT
                                    </h4>
                                    <p class="font-[poppins]">
                                        Jl. Lembang 47, Menteng, Indonesia
                                    </p>
                                </div>
                            </div>

                            <div class="mb-8 flex w-full max-w-[370px]">
                                <div
                                    class="mr-6 flex h-[60px] w-full max-w-[60px] items-center  text-black  justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="white"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_941_17577)">
                                            <path
                                                d="M24.3 31.1499C22.95 31.1499 21.4 30.7999 19.7 30.1499C16.3 28.7999 12.55 26.1999 9.19997 22.8499C5.84997 19.4999 3.24997 15.7499 1.89997 12.2999C0.39997 8.59994 0.54997 5.54994 2.29997 3.84994C2.34997 3.79994 2.44997 3.74994 2.49997 3.69994L6.69997 1.19994C7.74997 0.599942 9.09997 0.899942 9.79997 1.89994L12.75 6.29994C13.45 7.34994 13.15 8.74994 12.15 9.44994L10.35 10.6999C11.65 12.7999 15.35 17.9499 21.25 21.6499L22.35 20.0499C23.2 18.8499 24.55 18.4999 25.65 19.2499L30.05 22.1999C31.05 22.8999 31.35 24.2499 30.75 25.2999L28.25 29.4999C28.2 29.5999 28.15 29.6499 28.1 29.6999C27.2 30.6499 25.9 31.1499 24.3 31.1499ZM3.79997 5.54994C2.84997 6.59994 2.89997 8.74994 3.99997 11.4999C5.24997 14.6499 7.64997 18.0999 10.8 21.2499C13.9 24.3499 17.4 26.7499 20.5 27.9999C23.2 29.0999 25.35 29.1499 26.45 28.1999L28.85 24.0999C28.85 24.0499 28.85 24.0499 28.85 23.9999L24.45 21.0499C24.45 21.0499 24.35 21.0999 24.25 21.2499L23.15 22.8499C22.45 23.8499 21.1 24.1499 20.1 23.4999C13.8 19.5999 9.89997 14.1499 8.49997 11.9499C7.84997 10.8999 8.09997 9.54994 9.09997 8.84994L10.9 7.59994V7.54994L7.94997 3.14994C7.94997 3.09994 7.89997 3.09994 7.84997 3.14994L3.79997 5.54994Z"
                                                fill="white" />
                                            <path
                                                d="M29.3 14.25C28.7 14.25 28.25 13.8 28.2 13.2C27.8 8.15003 23.65 4.10003 18.55 3.75003C17.95 3.70003 17.45 3.20003 17.5 2.55003C17.55 1.95003 18.05 1.45003 18.7 1.50003C24.9 1.90003 29.95 6.80003 30.45 13C30.5 13.6 30.05 14.15 29.4 14.2C29.4 14.25 29.35 14.25 29.3 14.25Z"
                                                fill="whiter" />
                                            <path
                                                d="M24.35 14.7002C23.8 14.7002 23.3 14.3002 23.25 13.7002C22.95 11.0002 20.85 8.90018 18.15 8.55018C17.55 8.50018 17.1 7.90018 17.15 7.30018C17.2 6.70018 17.8 6.25018 18.4 6.30018C22.15 6.75018 25.05 9.65018 25.5 13.4002C25.55 14.0002 25.15 14.5502 24.5 14.6502C24.4 14.7002 24.35 14.7002 24.35 14.7002Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_941_17577">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="mb-1 text-xl font-[montserrat]">
                                        TELEPON
                                    </h4>
                                    <p class="font-[poppins]">
                                        0815-11-777-999
                                    </p>
                                </div>
                            </div>

                            <div class="mb-8 flex w-full max-w-[370px]">
                                <div
                                    class="mr-6 flex h-[60px] w-full max-w-[60px] items-center  text-black  justify-center overflow-hidden rounded  sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M28 4.7998H3.99998C2.29998 4.7998 0.849976 6.1998 0.849976 7.9498V24.1498C0.849976 25.8498 2.24998 27.2998 3.99998 27.2998H28C29.7 27.2998 31.15 25.8998 31.15 24.1498V7.8998C31.15 6.1998 29.7 4.7998 28 4.7998ZM28 7.0498C28.05 7.0498 28.1 7.0498 28.15 7.0498L16 14.8498L3.84998 7.0498C3.89998 7.0498 3.94998 7.0498 3.99998 7.0498H28ZM28 24.9498H3.99998C3.49998 24.9498 3.09998 24.5498 3.09998 24.0498V9.2498L14.8 16.7498C15.15 16.9998 15.55 17.0998 15.95 17.0998C16.35 17.0998 16.75 16.9998 17.1 16.7498L28.8 9.2498V24.0998C28.9 24.5998 28.5 24.9498 28 24.9498Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="mb-1 text-xl font-[montserrat]">
                                        EMAIL
                                    </h4>
                                    <p class="font-[poppins]">
                                        info@ikaundipjakarta.org
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <div
                            class="relative rounded-2xl p-8 bg-[#f9f6f2] bg-opacity-10 shadow-xl backdrop-blur  sm:p-12">
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="mb-6">
                                    <input type="text" name="name" id="name" placeholder="Your Name"
                                        class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-stone-800 " />
                                </div>
                                <div class="mb-6">
                                    <input type="email" name="email" id="email" placeholder="Your Email"
                                        class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-stone-800 " />
                                </div>
                                <div class="mb-6">
                                    <input type="number" name="phone" id="phone" placeholder="Your Phone"
                                        class="w-full rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-stone-800 " />
                                </div>
                                <div class="mb-6">
                                    <textarea rows="6" name="message" id="message" placeholder="Your Message"
                                        class="w-full resize-none rounded border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-stone-800 "></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="font-[poppins] border border-[#9e8f7b] w-full rounded-xl px-6 py-3 text-center font-medium hover:bg-[#9e8f7b] p-3 text-white transition">
                                        Kirim Pesan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menampilkan footer -->
        {!! $footer !!}

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        @if (session('success'))
            <script>
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif
</body>

</html>
