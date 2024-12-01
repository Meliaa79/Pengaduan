<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Custom Styles -->
    <style>
        :root {
            --primary: #548CA8; /* Primary color */
            --secondary: #334257; /* Adjusted secondary color */
            --bg-light: #F3F4F6; /* Background color */
            --text-light: #ffffff; /* Light text color */
            --text-dark: #334257; /* Dark text color */
            --border: #d1d5db; /* Border color */
            --bg-sidebar: #96B6C5;
        }
    </style>
</head>
<body class="bg-[var(--bg-light)] font-poopins">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="sidebar fixed top-0 left-0 bottom-0 w-[116px] h-screen p-6 bg-[--bg-sidebar] text-gray-800 transition-all duration-500 ease-in-out lg:w-[240px] hover:w-[240px]">
            <!-- Logo -->
            <div class="logo mb-6">
                <img src="img/suarakita.jpg" alt="Foto Profil" class="w-24 h-24 rounded-full border-4 border-blue-800 mb-2">
            </div>

            <!-- Menu -->
            <ul class="menu relative flex flex-col h-[88%] space-y-4">
                <!-- Profil -->
                <li class="group hover:bg-[var(--primary)] rounded-lg">
                    <a href="#" class="flex items-center space-x-3 text-sm px-4 py-2 group-hover:text-white transition-colors">
                        <i class="bx bx-user text-xl"></i>
                        <span class="hidden lg:block">Profil</span>
                    </a>
                </li>
                <!-- Form Pengaduan -->
                <li class="group hover:bg-[var(--primary)] rounded-lg">
                    <a href="/userform" class="flex items-center space-x-3 text-sm px-4 py-2 group-hover:text-white transition-colors">
                        <i class="bx bx-calendar-check text-xl"></i>
                        <span class="hidden lg:block">Form Pengaduan</span>
                    </a>
                </li>
                <!-- Riwayat Pengaduan -->
                <li class="group hover:bg-[var(--primary)] rounded-lg">
                    <a href="#" class="flex items-center space-x-3 text-sm px-4 py-2 group-hover:text-white transition-colors">
                        <i class="bx bx-history text-xl"></i>
                        <span class="hidden lg:block">Riwayat Pengaduan</span>
                    </a>
                </li>
                <!-- Logout -->
                <li class="mt-auto group hover:bg-red-600 rounded-lg">
                    <a href="/login" class="flex items-center space-x-3 text-sm px-4 py-2 group-hover:text-white transition-colors">
                        <i class="bx bx-log-out text-xl"></i>
                        <span class="hidden lg:block">Logout</span>
                    </a>
                </li>
            </ul>
        </aside>

        <main class="ml-[30px] flex-1 bg-gray-100">
            <div class="main--content transition-all duration-500 ease-in-out ml-[116px] lg:ml-[240px] p-8">
                <!-- Kotak Putih untuk Header dan Tabel -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <!-- Header -->
                    <div class="header--wrapper mb-6">
                        <div class="header--title">
                            <h2 class="text-3xl font-semibold text-gray-800">Riwayat Laporan Pengaduan</h2> 
                        </div>
                    </div>

                    <!-- Tabel Laporan -->
                    <table class="review-table w-full table-auto border-separate border-spacing-0 shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-[var(--secondary)] text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">No</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Judul Pengaduan</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Tanggal Laporan</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Tanggal Konfirmasi</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Tanggal Selesai</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-100">Status Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-sm font-medium text-gray-800">1</td>
                                <td class="px-6 py-4 text-sm text-gray-800">Jalan Rusak</td>
                                <td class="px-6 py-4 text-sm text-gray-800">20 November 2024</td>
                                <td class="px-6 py-4 text-sm text-gray-800">22 November 2024</td>
                                <td class="px-6 py-4 text-sm text-gray-800">-</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
                                    <span class="px-3 py-1 text-xs font-semibold text-white bg-yellow-500 rounded-full">Dikerjakan</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-sm font-medium text-gray-800">2</td>
                                <td class="px-6 py-4 text-sm text-gray-800">Lampu Jalan</td>
                                <td class="px-6 py-4 text-sm text-gray-800">10 November 2024</td>
                                <td class="px-6 py-4 text-sm text-gray-800">12 November</td>
                                <td class="px-6 py-4 text-sm text-gray-800">16 November 2024</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
                                    <span class="px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">Selesai</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-sm font-medium text-gray-800">3</td>
                                <td class="px-6 py-4 text-sm text-gray-800">Perbaikan Saluran Air</td>
                                <td class="px-6 py-4 text-sm text-gray-800">9 November 2024</td>
                                <td class="px-6 py-4 text-sm text-gray-800">10 November</td>
                                <td class="px-6 py-4 text-sm text-gray-800">15 November 2024</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
                                <span class="px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">Selesai</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>



    </div>
    
</body>
</html>