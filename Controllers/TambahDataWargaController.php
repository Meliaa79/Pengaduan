<?php

namespace App\Http\Controllers;

use App\Models\TambahWarga;
use Illuminate\Http\Request;

class TambahDataWargaController extends Controller
{
    // Menampilkan form tambah data warga
    public function index()
    {
        return view('tambahdatawarga');
    }

    // Menyimpan data warga ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16|unique:tambahwarga',
            'telepon' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Simpan data warga ke database
        TambahWarga::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'telepon' => $request->telepon,
            'password' => bcrypt($request->password),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('tambahdatawarga')->with('success', 'Data Warga Berhasil Disimpan!');
    }
}
