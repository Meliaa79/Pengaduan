<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Petugas</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <main class="max-w-xl mx-auto p-8 bg-white shadow-lg rounded-lg mt-10">

        <header class="mb-6 text-center">
            <h2 class="text-3xl font-semibold text-gray-700">Edit Petugas</h2>
            <p class="text-gray-500 mt-1">Perbarui informasi petugas berikut</p>
        </header>

        <!-- Form Edit Petugas -->
        <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
    @csrf
    @method('PUT')  <!-- Metode PUT untuk update data -->

    <div class="mb-4">
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $petugas->nama) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div class="mb-4">
        <label for="telepon" class="block text-sm font-medium text-gray-700">Telepon</label>
        <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $petugas->telepon) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div class="mb-4">
        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $petugas->alamat) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div class="mb-4">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update Petugas</button>
    </div>
</form>

    </main>

</body>

</html>
