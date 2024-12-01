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
<body class="bg-[var(--bg-light)] font-poppins">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="sidebar fixed top-0 left-0 bottom-0 w-[116px] h-screen p-6 bg-[--bg-sidebar] text-gray-800 transition-all duration-500 ease-in-out lg:w-[240px] hover:w-[240px]">
            <!-- Logo -->
            <div class="logo mb-6">
                <img src="img/suarakita.jpg" alt="Logo" class="w-[60%] mx-auto" />
            </div>

            <!-- Menu -->
            <ul class="menu relative flex flex-col h-[88%] space-y-4">
                <!-- Profil -->
                <li class="group hover:bg-[var(--primary)] rounded-lg">
                    <a href="/pengguna" class="flex items-center space-x-3 text-sm px-4 py-2 group-hover:text-white transition-colors">
                        <i class="bx bx-user text-xl"></i>
                        <span class="hidden lg:block">Profil</span>
                    </a>
                </li>
                <!-- Form Pengaduan -->
                <li class="group hover:bg-[var(--primary)] rounded-lg">
                    <a href="#" class="flex items-center space-x-3 text-sm px-4 py-2 group-hover:text-white transition-colors">
                        <i class="bx bx-calendar-check text-xl"></i>
                        <span class="hidden lg:block">Form Pengaduan</span>
                    </a>
                </li>
                <!-- Riwayat Pengaduan -->
                <li class="group hover:bg-[var(--primary)] rounded-lg">
                    <a href="/riwayatlaporanuser" class="flex items-center space-x-3 text-sm px-4 py-2 group-hover:text-white transition-colors">
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


        <!-- Main Content -->
        <main class="ml-[116px] lg:ml-[240px] flex-1 bg-gray-100 py-10 px-5">
            <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-lg p-8">
                <h1 class="text-3xl font-semibold text-gray-800 mb-6">Form Pengaduan</h1>
                <form id="pengaduanForm" class="space-y-6">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama:</label>
                        <input type="text" id="nama" name="nama" class="w-full border-gray-300 rounded-lg px-4 py-3 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Nama Anda">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email:</label>
                        <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-lg px-4 py-3 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Email Anda">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Pengaduan:</label>
                            <input type="date" id="tanggal" name="tanggal" class="w-full border-gray-300 rounded-lg px-4 py-3 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Pengaduan:</label>
                            <input type="text" id="judul" name="judul" class="w-full border-gray-300 rounded-lg px-4 py-3 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Judul Pengaduan">
                        </div>
                    </div>
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat:</label>
                        <textarea id="alamat" name="alamat" class="w-full border-gray-300 rounded-lg px-4 py-3 focus:ring-blue-500 focus:border-blue-500" rows="3" placeholder="Masukkan Alamat"></textarea>
                    </div>
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Pengaduan:</label>
                        <textarea id="deskripsi" name="deskripsi" class="w-full border-gray-300 rounded-lg px-4 py-3 focus:ring-blue-500 focus:border-blue-500 resize-none" rows="5" placeholder="Jelaskan pengaduan Anda dengan rinci di sini..."></textarea>
                        <p class="text-sm text-gray-500 mt-2">* Maksimal 500 karakter.</p>
                    </div>
                    <div>
                        <button type="button" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700" onclick="showPopup()">Submit</button>
                    </div>
                </form>
            </div>
        </main>

    <!-- Pop-ups -->
    <div id="confirmation-popup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <p class="text-[var(--text-dark)]">Apakah Anda yakin ingin mengirim formulir ini?</p>
            <div class="flex justify-center space-x-4 mt-4">
                <button class="bg-[var(--primary)] text-white px-6 py-2 rounded-lg" onclick="submitForm()">Yes</button>
                <button class="bg-gray-200 text-black px-6 py-2 rounded-lg" onclick="closePopup()">No</button>
            </div>
        </div>
    </div>

    <!-- Pop-up Success -->
<div id="success-popup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
        <p class="text-[var(--text-dark)]">Form berhasil dikirim!</p>
        <button class="bg-[var(--primary)] text-white px-6 py-2 mt-4 rounded-lg" onclick="closeSuccessPopup()">OK</button>
    </div>
</div>

<script>
    function showPopup() {
        document.getElementById('confirmation-popup').classList.remove('hidden');
    }

    function closePopup() {
        document.getElementById('confirmation-popup').classList.add('hidden');
    }

    function submitForm() {
        closePopup();  // Menutup pop-up konfirmasi
        setTimeout(() => {
            document.getElementById('success-popup').classList.remove('hidden');  // Menampilkan pop-up sukses
            setTimeout(() => {
                // Redirect ke halaman riwayat laporan setelah pop-up sukses ditutup
                window.location.href = 'http://localhost/laravel10/resources/views/riwayatLaporanUser.blade.php'; // Ganti URL sesuai dengan rute halaman riwayat laporan
            }, 1000); // Menunggu 1 detik sebelum mengarahkan pengguna
        }, 500); // Menunggu 0.5 detik untuk memunculkan pop-up sukses
    }

    function closeSuccessPopup() {
        document.getElementById('success-popup').classList.add('hidden');
        // Tidak perlu reload halaman, bisa langsung arahkan pengguna
        window.location.href = 'http://localhost/laravel10/resources/views/riwayatLaporanUser.blade.php'; // Mengarahkan pengguna ke halaman riwayat laporan
    }
</script>

</body>
</html>
