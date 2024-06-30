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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script defer src="{{ asset('asset/js/alpine.min.js') }}"></script>
</head>

<body>
    <!-- Navbar -->
    {!! $navbar !!}


    <!-- ====== Blog Section Start -->
    <section class="bg-white pb-10 pt-20 lg:pb-20 lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-black">
                            Kegiatan IKA UNDIP
                        </span>
                        <h2 class="mb-4 text-3xl font-bold e sm:text-4xl md:text-[30px]">
                            Detail Kegiatan IKA Undip
                        </h2>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap">

                <div class="w-full px-4 md:w-full">
                    <div class="mb-10 w-full">
                        <div class="mb-8 overflow-hidden rounded">
                            <img src="{{ asset('storage/gallery/' . $galeri->photo) }}" alt="image" class="w-full" />
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl font-semibold text-black hover:text-primary  sm:text-2xl lg:text-xl xl:text-2xl">
                                    {{ $galeri->nama_kegiatan }}
                                </a>
                            </h3>
                            <div class="mt-10">
                                <a href="{{ route('user.galeri') }}"
                                    class="mb-5 inline-block rounded bg-stone-700 px-4 py-1 text-center text-xs font-semibold leading-loose text-white">
                                    Kembali
                                </a>
                                <a href="#" id="btnDaftarAcara"
                                    class="mb-5 inline-block rounded bg-stone-700 px-4 py-1 text-center text-xs font-semibold leading-loose text-white">
                                    Daftar Acara
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- ====== Blog Section End -->

    <!-- Menampilkan footer -->
    {!! $footer !!}
    <script>
        // Tampilkan SweetAlert saat tombol "Daftar Acara" ditekan
        document.getElementById("btnDaftarAcara").onclick = function() {
            // Minta pengguna memasukkan NIM dan nama kegiatan
            Swal.fire({
                title: 'Daftar Acara',
                html: '<input id="nim" class="swal2-input" placeholder="NIM Anda" required>' +
                    '<input id="namaKegiatan" class="swal2-input" placeholder="Nama Kegiatan" value="{{ $galeri->nama_kegiatan }}" disabled>',
                showCancelButton: true,
                confirmButtonText: 'Daftar',
                cancelButtonText: 'Batal',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    // Ambil nilai dari input
                    const nim = document.getElementById('nim').value;
                    const namaKegiatan = document.getElementById('namaKegiatan').value;

                    // Kirim NIM dan nama kegiatan ke server untuk pendaftaran
                    return fetch("{{ route('user.daftaracara') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                nim: nim,
                                nama_kegiatan: namaKegiatan
                            })
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.json();
                        })
                        .catch(error => {
                            Swal.showValidationMessage(`Request gagal: NIM Harus Terdaftar`);
                        });
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                // Tampilkan pesan sukses atau error
                if (result.isConfirmed) {
                    Swal.fire({
                        title: result.value.success ? 'Berhasil' : 'Gagal',
                        text: result.value.message,
                        icon: result.value.success ? 'success' : 'error'
                    });
                }
            });
        }
    </script>
</body>

</html>
