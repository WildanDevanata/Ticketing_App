<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing App</title>

    <!-- Tailwind (Breeze default compatible) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">
                Ticketing App
            </h1>

            <div class="space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="text-sm font-medium text-gray-700 hover:text-indigo-600">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="text-sm font-medium text-gray-700 hover:text-indigo-600">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="text-sm font-medium text-white bg-indigo-600 px-4 py-2 rounded hover:bg-indigo-700">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h2 class="text-4xl font-bold mb-4">
            Platform Ticketing Event Modern
        </h2>

        <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-8">
            Kelola event, jual tiket, dan pantau penjualan secara mudah dan cepat
            dalam satu dashboard terintegrasi.
        </p>

        <div class="flex justify-center gap-4">
            @auth
                <a href="{{ route('dashboard') }}"
                   class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                    Masuk Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                    Mulai Sekarang
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="border border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg hover:bg-indigo-50">
                        Daftar
                    </a>
                @endif
            @endauth
        </div>
    </section>

    <!-- Features -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">
            <div>
                <h3 class="text-lg font-semibold mb-2">Manajemen Event</h3>
                <p class="text-gray-600">
                    Buat dan kelola event dengan mudah melalui dashboard admin.
                </p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Penjualan Tiket</h3>
                <p class="text-gray-600">
                    Sistem tiket digital yang aman dan terintegrasi.
                </p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Laporan & Riwayat</h3>
                <p class="text-gray-600">
                    Pantau penjualan dan histori transaksi secara real-time.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 text-sm text-gray-500">
        © {{ date('Y') }} Ticketing App. All rights reserved.
    </footer>

</body>
</html>
