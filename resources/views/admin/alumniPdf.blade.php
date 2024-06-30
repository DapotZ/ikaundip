<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10 Generate PDF Example - fundaofwebit.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <br />
    <br />

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">NAMA</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">NIM</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">FAKULTAS</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">JURUSAN</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TAHUN LULUS</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">PEKERJAAN</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($alumnus as $alumnus)
                    <tr>
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $alumnus->name }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $alumnus->nim }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $alumnus->fakultas }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $alumnus->jurusan }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $alumnus->tahunlulus }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $alumnus->pekerjaan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
