<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex-1 flex flex-col">
        <header class="bg-[#BAAD9D] shadow-md p-3">
            <div class="flex items-center justify-between">
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('asset/images/logo2.png') }}" alt="logo" class="w-30"/>
                    <div>
                        <div class="text-lg font-semibold mt-6">
                            <span class="text-[#A28989] font-bold capitalize">IKA<span class="text-[#404A4A]">UNDIP</span></span>
                        </div>
                        <div class="text-sm"><span class="font-semibold text-gray-700">LEMBARAN / </span> <span class="text-[#404A4A]">HALAMAN DEPAN</span></div>
                    </div>
                </div>
                <div class="space-x-4 mr-12">
                    <h6 class="mb-0 font-bold capitalize">@yield('title')</h6>
                </div>
            </div>
        </header>
    </div>
</body>
</html>
