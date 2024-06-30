<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <title>Register</title>

    </head>
    <body class="">
        <main class="">
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-4 rounded-md">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <section class="bg-gray-100 min-h-screen flex items-center justify-center">
            <div class="bg-[#ded8d8] flex rounded-3xl shadow-xl max-w-3xl relative">
                <div class="w-2/5 sm:block hidden mt-5 max-w-full">
                    <img class="p-2 mt-16 ml-5" src="asset/images/register/alumni.png" alt="">
                </div>
                    <div class="sm:w-3/5 px-12 mb-10 mt-10 ">
                        <h2 class="font-bold text-2xl text-center font-[montserrat]">REGISTRASI</h2>
                        <form action="{{ route('user.register')}}" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
                            @csrf
                            <input class="p-2 mt-8 rounded-xl" type="text" name="name" placeholder="Nama">
                            <input class="p-2 rounded-xl border" type="text" name="nim" placeholder="NIM">
                                <div class="grid md:grid-cols-2 md:gap-6">
                                    <div class="flex gap-2">
                                    <select class="p-2 rounded-xl border w-full" name="fakultas">
                                        <option value="" disabled selected>Fakultas</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Kedokteran">Kedokteran</option>
                                    </select>
                                </div>
                            <input class="p-2 rounded-xl border" type="text" name="jurusan" placeholder="Jurusan">
                        </div>
                            <input class="p-2 rounded-xl border" type="text" name="tahunlulus" placeholder="Tahun Lulus">
                            <input class="p-2 rounded-xl border" type="text" name="pekerjaan" placeholder="Pekerjaan">
                            <input type="file" name="foto" id="inputFoto" class="p-2 bg-white rounded-xl border">
                            <button class="bg-[#544f4f] text-white py-2 rounded-xl hover:scale-105 duration-300">Submit</button>
                        </form>
                    </div>
                    <!------>

                </div>
            </section>
        </main>
      </body>
  <!-- plugin for scrollbar  -->
  <script src="{{asset('admintailwind/js/plugins/perfect-scrollbar.min.js')}}" async></script>
  <!-- main script file  -->
  <script src="{{asset('admintailwind/js/soft-ui-dashboard-tailwind.js?v=1.0.5')}}" async></script>
</html>
