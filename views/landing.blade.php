<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans">

    <!-- Navbar -->
    <header class="flex justify-between items-center p-4 md:p-6 bg-white shadow-sm">
        <div class="flex items-center">
            <img src="{{ asset('img/suarakita.jpg') }}" alt="Logo SuaraKita" class="h-16 w-auto md:h-20">
        </div>
        <nav class="space-x-4 md:space-x-6 text-gray-700">
            <a href="#" class="hover:text-blue-500">Home</a>
            <a href="#" class="hover:text-blue-500">Kontak</a>
            <a href="#" class="hover:text-blue-500">Bantuan</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="flex flex-col-reverse md:flex-row justify-between items-center max-w-7xl mx-auto p-6 md:p-12 bg-gray-50 h-screen">
        <!-- Text -->
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold text-gray-800 mb-4">Layanan Pengaduan Masyarakat!</h1>
            <p class="text-md md:text-lg text-gray-600 mb-6">Suarakan pendapatmu di website SuaraKita</p>
            <a href="/login" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-600">Login</a>
        </div>

        <!-- Image -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="{{ asset('img/ilustrasi.jpg') }}" alt="Ilustrasi" class="w-3/4 md:w-full">
        </div>
    </section>

</body>

</html>
