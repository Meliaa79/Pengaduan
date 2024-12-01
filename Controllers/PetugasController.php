<?php

namespace App\Http\Controllers;

use App\Models\TambahPetugas; 
use App\Models\Petugas; 

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel
        $petugas = TambahPetugas::all(); 

        // Kirim data ke view
        return view('petugas', compact('petugas'));
    }

    
    
}
