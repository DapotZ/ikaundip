<?php

namespace App\Exports;

use App\Models\Alumnus;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportAlumnus implements FromCollection
{
    public function collection()
    {
        // Mengambil data yang diperlukan dari database
        $alumnus = Alumnus::select('id', 'name', 'nim', 'fakultas', 'jurusan', 'tahunlulus', 'pekerjaan')->get();

        // Mengubah data menjadi bentuk collection
        $collection = new Collection();

        // Menambahkan judul kolom ke collection
        $collection->push(['NO', 'Nama', 'NIM', 'Fakultas', 'Jurusan', 'Tahun Lulus', 'Pekerjaan']);

        // Menambahkan data ke collection
        $no = 1;
        foreach ($alumnus as $alumni) {
            $collection->push([
                $no++,
                $alumni->name,
                $alumni->nim,
                $alumni->fakultas,
                $alumni->jurusan,
                $alumni->tahunlulus,
                $alumni->pekerjaan
            ]);
        }

        return $collection;
    }
}


