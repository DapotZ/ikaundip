<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IKA UNDIP</title>
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="{{ asset('asset/js/alpine.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- ====== Navbar Section Start -->
    <!-- Navbar -->
    <header id="navbar" x-data="{ navbarOpen: false }"
        class="fixed left-0 top-0 z-50 w-full bg-[#9F8F7B] bg-opacity-70 backdrop-filter backdrop-blur-md justify-between shadow-lg">
        <div class="container mx-auto ">
            <div class="relative mx-4 flex items-center justify-between">
                <div class="max-w-full items-center">
                    <a href="{{ route('user') }}" class="block w-full py-4">
                        <img src=" {{ asset('asset/images/log.png') }}" alt="logo" class="w-16 " />
                    </a>
                </div>

                <div class="flex w-full items-center justify-end px-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                            id="navbarToggler"
                            class="absolute right-4 top-1/2 block text-white -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                        </button>
                        <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                            class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white text-black px-6 py-5 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:shadow-none xl:ml-11">
                            <ul class="block lg:flex font-[poppins]">
                                <li>
                                    <a href="{{ route('user') }}" :class="navbarOpen ? 'text-[#6c584c]' : 'text-white'"
                                        class="flex py-2 text-base hover:text-[#6c584c] dark:text-[#6c584c] lg:ml-10 lg:inline-flex transform transition duration-300 hover:scale-110">
                                        Beranda
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.galeri') }}"
                                        :class="navbarOpen ? 'text-[#6c584c]' : 'text-white'"
                                        class="flex py-2 text-base text-[#6c584c] hover:text-[#6c584c] dark:text-[#6c584c] lg:ml-10 lg:inline-flex transform transition duration-300 hover:scale-110">
                                        Galeri
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.news') }}"
                                        :class="navbarOpen ? 'text-[#6c584c]' : 'text-white'"
                                        class="flex py-2 text-base text-[#6c584c] hover:text-[#6c584c] dark:text-[#6c584c] lg:ml-10 lg:inline-flex transform transition duration-300 hover:scale-110">
                                        Berita
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.cerita') }}"
                                        :class="navbarOpen ? 'text-[#6c584c]' : 'text-white'"
                                        class="flex py-2 text-base text-[#6c584c] hover:text-[#6c584c] dark:text-[#6c584c] lg:ml-10 lg:inline-flex transform transition duration-300 hover:scale-110">
                                        Cerita
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.acara') }}"
                                        :class="navbarOpen ? 'text-[#6c584c]' : 'text-white'"
                                        class="flex py-2 text-base hover:text-[#6c584c] dark:text-[#6c584c] lg:ml-10 lg:inline-flex transform transition duration-300 hover:scale-110">
                                        Acara
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.alumni') }}"
                                        :class="navbarOpen ? 'text-[#6c584c]' : 'text-white'"
                                        class="flex py-2 text-base text-[#6c584c] hover:text-[#6c584c] dark:text-[#6c584c] lg:ml-10 lg:inline-flex transform transition duration-300 hover:scale-110">
                                        Alumni
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ====== Navbar Section End -->
</body>

</html>
