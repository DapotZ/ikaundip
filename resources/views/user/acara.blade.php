<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IKA UNDIP</title>
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('asset/css/tailwind.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="{{ asset('asset/js/alpine.min.js') }}"></script>
</head>

<body>
    <!-- Navbar -->
    {!! $navbar !!}

    <!-- ====== Team Section Start -->
    <section class="pb-10 pt-20 bg-[#f9f6f2] lg:pb-10 lg:pt-[120px]" id="alumni">
        <div class="container mx-auto">
            <div class="flex flex-row justify-end">
                </button>
            </div>
            <br>
            <br>
        </div>

        <!-- ====== Alumni Section Start -->
        <div id="alumni" class="py-1 h-auto font-[poppins]">
            <div class="container mx-auto px-4 py-2">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                            <span class="mb-2 block text-4xl font-semibold text-[#7e5d50] font-[Montserrat]">
                                ACARA
                            </span>
                            <h class="mb-3 text-3xl font-[poppins] leading-[1.2] sm:text-4xl md:text-[30px]">
                                Acara IKA Undip
                            </h>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 justify-center mb-28">
                    @php
                    use Carbon\Carbon;
                    @endphp
                    @foreach ($gallerys as $gallerys)
                        <div
                            class="bg-white relative shadow-lg rounded-lg transform transition duration-300 hover:scale-105 break-words overflow-hidden">
                            <img class="w-full max-h-[200px] object-cover mb-5 object-cover aspect-square"
                                src="{{ asset('storage/gallery/' . $gallerys->photo) }}" alt="about-us-image">
                            <div class="px-6 py-6">
                                <div class="font-bold text-xl mb-2">{{ $gallerys->nama_kegiatan }}</div>
                                <p class="text-sm font-semibold break-words overflow-hidden mb-2">
                                    {{ \Illuminate\Support\Str::limit($gallerys->detail_kegiatan, 150, '') }}
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
                            <div class="px-6 py-3 w-full">
                                <button id="btnJoinAcara{{ $gallerys->id }}"
                                    class="border border-[#9e8f7b] hover:bg-[#9e8f7b] text-black hover:text-white font-[poppins] py-2 px-4 rounded w-full">
                                    DAFTAR ACARA
                                </button>
                            </div>
                            <script>
                                document.getElementById("btnJoinAcara{{ $gallerys->id }}").onclick = function() {
                                    // Muat data alumnus dari tabel alumnus saat halaman dimuat
                                    var alumnusData = <?php echo json_encode($alumnus); ?>;

                                    // Buat daftar suggestion dari data alumnus
                                    var suggestions = alumnusData.map(function(alumnus) {
                                        return '<option value="' + alumnus.nim + '">' + alumnus.name + '</option>';
                                    }).join('');

                                    // Tampilkan SweetAlert saat tombol JOIN ACARA ditekan
                                    Swal.fire({
                                        title: 'Daftar Acara',
                                        html: '<input id="nim" class="swal2-input" list="alumniList" placeholder="NIM Anda" required>' +
                                            '<datalist id="alumniList">' +
                                            // Tampilkan daftar suggestion
                                            suggestions +
                                            '</datalist>' +
                                            '<input id="namaKegiatan" class="swal2-input" placeholder="Nama Kegiatan" value="{{ $gallerys->nama_kegiatan }}" disabled>',
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
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ====== Alumni Section End -->
        </div>
    </section>
    <!-- ====== Team Section End -->


    <!-- Menampilkan footer -->
    {!! $footer !!}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
