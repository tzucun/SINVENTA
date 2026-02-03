<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alker extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_alker',
        'nama_alker',
        'kategori',
        'jumlah',
        'kondisi',
        'lokasi',
        'terakhir_dikalibrasi',
    ];
}
