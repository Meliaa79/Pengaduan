<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Desa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Untuk grafik -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>

<body class="bg-gray-50 font-sans">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-blue-600 text-white p-6">
            <div class="flex flex-col items-center">
                <img src="{{ asset('img/suarakita.jpg') }}" alt="Logo SuaraKita" class="h-16 mb-6">
                <nav class="w-full">
                    <a href="#" class="flex items-center px-6 py-3 text-white bg-blue-500 rounded-lg mb-2">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        Dashboard
                    </a>
                    <a href="/verifikasi" class="flex items-center px-6 py-3 text-white hover:bg-blue-500 rounded-lg mb-2">
                        <i class="fas fa-check-circle mr-3"></i>
                        Verifikasi Pengaduan
                    </a>
                   <!-- Dropdown Data -->
                <div class="relative">
                    <button onclick="toggleDropdown('data-menu')" class="w-full flex justify-between items-center px-4 py-2 rounded hover:bg-blue-700">
                        <span><i class="fa-solid fa-database mr-2"></i> Data</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div id="data-menu" class="hidden flex-col mt-2 bg-blue-800 rounded shadow-lg">
                        <a href="/petugas" class="block px-8 py-2 hover:bg-blue-700">Data Petugas</a>
                        <a href="/warga" class="block px-8 py-2 hover:bg-blue-700">Data Warga</a>
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

                </nav>
            </div>
            <div class="flex justify-center mt-auto py-6">
                <a href="/login" class="flex items-center text-white hover:text-red-500">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <h1 class="text-2xl font-bold mb-6">Dashboard Pihak Desa</h1>

            <!-- Grafik Pengaduan -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <h2 class="text-xl font-semibold mb-4">Grafik Pengaduan</h2>
                <canvas id="grafikPengaduan" class="w-full h-80"></canvas>
            </div>

            <!-- Tabel Pengaduan -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b border-gray-400 py-2 px-4">No</th>
                            <th class="border-b border-gray-400 py-2 px-4">Nama Pengadu</th>
                            <th class="border-b border-gray-400 py-2 px-4">Tanggal Pengaduan</th>
                            <th class="border-b border-gray-400 py-2 px-4">Deskripsi</th>
                            <th class="border-b border-gray-400 py-2 px-4">Status Pengaduan</th>
                            <th class="border-b border-gray-400 py-2 px-4">Tanggal Pengerjaan</th>
                            <th class="border-b border-gray-400 py-2 px-4">Umur / hari</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-t border-gray-400 py-2 px-4">1</td>
                            <td class="border-t border-gray-400 py-2 px-4">Budi</td>
                            <td class="border-t border-gray-400 py-2 px-4">2024-09-10</td>
                            <td class="border-t border-gray-400 py-2 px-4">Jalan di depan banjir & ada banyak lubang</td>
                            <td class="border-t border-gray-400 py-2 px-4">
                                <select class="bg-blue-50 border rounded-md px-2 py-1">
                                    <option>Belum Ditangani</option>
                                    <option>Sudah Ditangani</option>
                                </select>
                            </td>
                            <td class="border-t border-gray-400 py-2 px-4">--</td>
                            <td class="border-t border-gray-400 py-2 px-4">--</td>
                        </tr>
                        <tr>
                            <td class="border-t border-gray-400 py-2 px-4">2</td>
                            <td class="border-t border-gray-400 py-2 px-4">Ayu</td>
                            <td class="border-t border-gray-400 py-2 px-4">2024-09-21</td>
                            <td class="border-t border-gray-400 py-2 px-4">Lampu di jalan Angseri tidak menyala dan jalanan sangat gelap</td>
                            <td class="border-t border-gray-400 py-2 px-4">
                                <select class="bg-blue-50 border rounded-md px-2 py-1">
                                    <option>Sudah Ditangani</option>
                                    <option>Belum Ditangani</option>
                                </select>
                            </td>
                            <td class="border-t border-gray-400 py-2 px-4">2024-09-30</td>
                            <td class="border-t border-gray-400 py-2 px-4">9</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>

        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.classList.toggle('hidden');
        }
   

        // Data untuk grafik
        const ctx = document.getElementById('grafikPengaduan').getContext('2d');
        const grafikPengaduan = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>
