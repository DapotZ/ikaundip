<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    use HasFactory;

    protected $table = 'cerita';

    protected $fillable = [
        'foto', 'judul_cerita', 'isi_cerita', 'penulis', 'jurusan', 'angkatan'
    ];

}
