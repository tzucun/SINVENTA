<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salker extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_salker',
        'nama_salker',
        'jenis',
        'jumlah',
        'kondisi',
        'lokasi',
    ];
}
