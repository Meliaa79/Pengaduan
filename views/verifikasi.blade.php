<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Pengaduan</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-blue-600 text-white h-screen p-6">
            <!-- <div class="text-center text-xl font-bold mb-10">SuaraKita</div> -->
            <div class="logo mb-6">
                <img src="img/suarakita.jpg" alt="Logo" class="w-[60%] mx-auto" />
            </div>
            <nav>
                <ul>
                    <li class="mb-6">
                        <a href="/admindashboard" class="flex items-center gap-2">
                            <!-- <span class="material-icons">dashboard</span> -->
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="#" class="flex items-center gap-2 bg-blue-800 py-2 px-3 rounded">
                            <!-- <span class="material-icons">check_circle</span> -->
                            <span>Verifikasi Pengaduan</span>
                        </a>
                    </li>
                    <!-- Dropdown Data -->
                <div class="relative">
                    <button onclick="toggleDropdown('data-menu')" class="w-full flex justify-between items-center px-4 py-2 rounded hover:bg-blue-700">
                        <span><i class="fa-solid fa-database mr-2"></i> Data</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div id="data-menu" class="hidden flex-col mt-2 bg-blue-800 rounded shadow-lg">
                        <a href="/petugas" class="block px-8 py-2 hover:bg-blue-700">Data Petugas</a>
                        <a href="/datalaporan" class="block px-8 py-2 hover:bg-blue-700">Data Laporan</a>
                    </div>
                </div>

                <!-- Dropdown Laporan -->
                <div class="relative">
                    <button onclick="toggleDropdown('laporan-menu')" class="w-full flex justify-between items-center px-4 py-2 rounded hover:bg-blue-700">
                        <span><i class="fa-solid fa-chart-bar mr-2"></i> Laporan</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div id="laporan-menu" class="hidden flex-col mt-2 bg-blue-800 rounded shadow-lg">
                        <a href="/laporanakhir" class="block px-8 py-2 hover:bg-blue-700">Laporan Akhir</a>
                    </div>
                </div>
                
                    </li>
                </ul>
            </nav>
            <a href="/login" class="absolute bottom-10 flex items-center gap-2 text-red-200 hover:text-red-400">
                <!-- <span class="material-icons">logout</span> -->
                Logout
            </a>
        </aside>

        <!-- Main Content -->
        <main class="w-4/5 p-8">
            <h1 class="text-2xl font-bold mb-6">Verifikasi Pengaduan</h1>
            <table class="w-full border border-gray-300 bg-white text-sm">
                <thead class="bg-gray-200 text-left">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Nama Pengadu</th>
                        <th class="border border-gray-300 px-4 py-2">Kategori Pengaduan</th>
                        <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal Pengaduan</th>
                        <th class="border border-gray-300 px-4 py-2">Status Pengaduan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">Adi</td>
                        <td class="border border-gray-300 px-4 py-2">Banjir di Gang</td>
                        <td class="border border-gray-300 px-4 py-2">Di gang Jepun itu sering terjadi banjir saat hujan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">2024-10-22</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <select class="bg-white border border-gray-300 rounded px-2 py-1">
                                <option>Belum Ditangani</option>
                                <option>Sedang Ditangani</option>
                                <option>Selesai</option>
                            </select>
                        </td>
                    </tr>
                    <!-- Tambahkan baris berikutnya sesuai kebutuhan -->
                </tbody>
            </table>
        </main>
    </div>

    <script>
         function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.classList.toggle('hidden');
        }
    </script>

</body>
</html>
