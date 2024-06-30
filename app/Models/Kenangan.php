<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kenangan extends Model
{
    use HasFactory;

    protected $table = "kenangan";

    protected $fillable = [
        "title_foto",
        "foto",
        "title_video",
        "video",
        "start_time",
        "end_time",
    ];
}
