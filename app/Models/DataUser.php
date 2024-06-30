<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;

    protected $table = 'registeruser';

    protected $fillable = [
        'name',
        'nim',
        'fakultas',
        'jurusan',
        'tahunlulus',
        'pekerjaan',
    ];
}
