<?php

namespace App\Models;

use GuzzleHttp\Client;
use App\Models\Alumnus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class daftaracara extends Model
{
    use HasFactory;

    protected $table = 'daftaracara';

    protected $fillable = [
        'nim',
        'nama_kegiatan',
    ];

    public function alumnus(): BelongsTo
    {
        return $this->belongsTo(Alumnus::class, 'nim', 'nim');
    }
}
