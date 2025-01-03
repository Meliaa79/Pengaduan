<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahPetugas extends Model
{
    use HasFactory;

    protected $table = 'tambahpetugas';  // Nama tabel

    protected $fillable = [
        'nama',
        'telepon',
        'alamat',
    ];
}
