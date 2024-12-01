<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    // Tentukan nama tabel yang sesuai
    protected $table = 'tambahpetugas';

    // Tentukan kolom yang bisa diisi
    protected $fillable = ['nama', 'telepon', 'alamat'];
}
