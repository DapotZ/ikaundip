<?php

namespace App\Exports;

use App\Models\Daftaracara;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPengikutacara implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Mengambil data yang diperlukan dari database
        $pengikutacara = Daftaracara::select('id', 'nim', 'nama_kegiatan')->with('alumnus')->get();

        // Mengubah data menjadi bentuk collection
        $collection = new Collection();

        // Menambahkan judul kolom ke collection
        $collection->push(['NO','name', 'NIM', 'Nama Kegiatan']);

        // Menambahkan data ke collection
        $no = 1;
        foreach ($pengikutacara as $item) {
            $collection->push([
                $no++,
                $item->alumnus->name,
                $item->nim,
                $item->nama_kegiatan,
            ]);
        }

        return $collection;
    }
}
