<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnus extends Model
{
    use HasFactory;
    protected $table = 'alumnus';

    protected $fillable = [
        'name',
        'foto',
        'fakultas',
        'jurusan',
        'tahunlulus',
        'pekerjaan',
        'nim'
    ];

    public function daftaracaras()
    {
        return $this->hasMany(Daftaracara::class, 'nim', 'nim'); // relasi balik jika diperlukan
    }
}
