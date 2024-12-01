<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
    <!-- Link ke Vite CSS & JS -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col justify-center items-center">

        <!-- Card Form -->
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center mb-4">Tambah Petugas</h2>

            <!-- Form untuk tambah petugas -->
            <form action="{{ route('petugas.store') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Input Nama Petugas -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Petugas</label>
                    <input type="text" id="nama" name="nama" required 
                        class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Input No Telepon -->
                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700">No Telepon</label>
                    <input type="text" id="telepon" name="telepon" required 
                        class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Input Alamat -->
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea id="alamat" name="alamat" required 
                        class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Tombol -->
                <div class="flex justify-between">
                    <a href="/petugas" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Kembali</a>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
