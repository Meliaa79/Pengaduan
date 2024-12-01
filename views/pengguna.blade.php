<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans">

    <!-- Wrapper -->
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white shadow-md">
            <div class="flex flex-col items-center py-6">
                <img src="{{ asset('img/suarakita.jpg') }}" alt="Logo SuaraKita" class="h-16 mb-4">
                <nav class="w-full">
                    <a href="#" class="flex items-center px-6 py-3 text-blue-500 bg-blue-100 rounded-lg mb-2">
                        <i class="fas fa-user mr-3"></i>
                        Profile
                    </a>
                    <a href="/userform" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100 rounded-lg mb-2">
                        <i class="fas fa-file-alt mr-3"></i>
                        Form Pengaduan
                    </a>
                </nav>
            </div>
            <div class="flex justify-center mt-auto py-6">
                <a href="/login" class="flex items-center text-gray-600 hover:text-red-500">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Profile Header -->
            <h1 class="text-2xl font-bold mb-6">Profile</h1>
            <div class="bg-blue-200 p-6 rounded-lg mb-6">
                <div class="flex items-center">
                    <!-- Placeholder Foto -->
                    <div class="w-24 h-24 bg-black rounded-full mr-6"></div>
                    <div>
                        <p class="text-lg font-semibold">Username: </p>
                        <p class="text-lg">Nama: </p>
                        <p class="text-lg">Alamat: </p>
                    </div>
                </div>
            </div>

            <!-- Tabel Pengaduan -->
            <div class="bg-blue-200 p-6 rounded-lg">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b border-gray-400 py-2 px-4">Kategori Pengaduan</th>
                            <th class="border-b border-gray-400 py-2 px-4">Tanggal Pengaduan</th>
                            <th class="border-b border-gray-400 py-2 px-4">Tanggal Dikerjakan</th>
                            <th class="border-b border-gray-400 py-2 px-4">Umur Pengaduan</th>
                            <th class="border-b border-gray-400 py-2 px-4">Status Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-t border-gray-400 py-2 px-4">Perbaikan Jalan</td>
                            <td class="border-t border-gray-400 py-2 px-4">1 - Oktober - 2024</td>
                            <td class="border-t border-gray-400 py-2 px-4">5 - Oktober - 2024</td>
                            <td class="border-t border-gray-400 py-2 px-4">3</td>
                            <td class="border-t border-gray-400 py-2 px-4">Sedang Dikerjakan</td>
                        </tr>
                        <!-- Tambahkan baris lain jika diperlukan -->
                        <tr>
                            <td class="border-t border-gray-400 py-2 px-4"></td>
                            <td class="border-t border-gray-400 py-2 px-4"></td>
                            <td class="border-t border-gray-400 py-2 px-4"></td>
                            <td class="border-t border-gray-400 py-2 px-4"></td>
                            <td class="border-t border-gray-400 py-2 px-4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>

</html>
