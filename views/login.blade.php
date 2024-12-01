<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans">

    <!-- Navbar -->
    <header class="flex justify-start items-center p-6 bg-white shadow-sm">
        <div class="flex items-center">
            <img src="{{ asset('img/suarakita.jpg') }}" alt="Logo SuaraKita" class="h-16 w-auto">
        </div>
    </header>

    <!-- Login Section -->
    <section class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
            <!-- Form -->
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <!-- Username -->
                <div class="relative">
                    <input type="text" name="username" id="username" placeholder="Username"
                        class="w-full px-4 py-3 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fas fa-user"></i> <!-- Optional icon -->
                    </span>
                </div>

                <!-- Password -->
                <div class="relative">
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="w-full px-4 py-3 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="fas fa-lock"></i> <!-- Optional icon -->
                    </span>
                </div>

                <!-- Remember Me and Forgot Password -->
                <div class="flex justify-between items-center text-sm text-gray-600">
                    <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        Remember Me
                    </label>
                    <a href="#" class="hover:text-blue-500">Forgot Password</a>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600">
                    Login
                </button>
            </form>

            <!-- Close Button -->
            <button
                class="w-full mt-4 text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:underline">
                Close
            </button>
        </div>
    </section>

</body>

</html>
