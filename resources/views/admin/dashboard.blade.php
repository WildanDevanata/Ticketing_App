<x-layouts.admin title="Dashboard Admin">
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="container mx-auto p-6 md:p-10">
            <!-- Header Section -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-2">
                    <div class="h-1 w-12 bg-gradient-to-r from-gray-600 to-gray-800 rounded-full"></div>
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">
                        Dashboard Admin
                    </h1>
                </div>
                <p class="text-gray-600 ml-14">Selamat datang kembali! Berikut ringkasan data Anda.</p>
            </div>

            <!-- Stats Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <!-- Total Event Card -->
                <div class="group relative overflow-hidden">
                    <!-- Gradient Background Effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-indigo-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl"></div>
                    
                    <div class="relative card bg-white shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 group-hover:border-indigo-300 rounded-2xl">
                        <div class="card-body p-6">
                            <div class="flex items-start justify-between mb-4">
                                <div class="p-4 bg-gradient-to-br from-indigo-500 to-indigo-600 text-white rounded-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs font-semibold">
                                    Active
                                </div>
                            </div>

                            <div>
                                <p class="text-sm font-medium text-gray-500 mb-1">Total Event</p>
                                <div class="flex items-baseline gap-2">
                                    <p class="text-4xl font-bold text-gray-800">{{ $totalEvents ?? 0 }}</p>
                                    <span class="text-sm text-gray-400">events</span>
                                </div>
                            </div>

                            <!-- Progress Bar -->
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-2 text-xs text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    <span>Event terdaftar dalam sistem</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Kategori Card -->
                <div class="group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-50 to-emerald-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl"></div>
                    
                    <div class="relative card bg-white shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 group-hover:border-emerald-300 rounded-2xl">
                        <div class="card-body p-6">
                            <div class="flex items-start justify-between mb-4">
                                <div class="p-4 bg-gradient-to-br from-emerald-500 to-emerald-600 text-white rounded-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4 6h16M4 12h16M4 18h7"/>
                                    </svg>
                                </div>
                                <div class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-xs font-semibold">
                                    Categories
                                </div>
                            </div>

                            <div>
                                <p class="text-sm font-medium text-gray-500 mb-1">Total Kategori</p>
                                <div class="flex items-baseline gap-2">
                                    <p class="text-4xl font-bold text-gray-800">{{ $totalCategories ?? 0 }}</p>
                                    <span class="text-sm text-gray-400">kategori</span>
                                </div>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-2 text-xs text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                    <span>Klasifikasi event tersedia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Transaksi Card -->
                <div class="group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-50 to-orange-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl"></div>
                    
                    <div class="relative card bg-white shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 group-hover:border-orange-300 rounded-2xl">
                        <div class="card-body p-6">
                            <div class="flex items-start justify-between mb-4">
                                <div class="p-4 bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h2M9 13h6m0 0l-3-3m3 3l-3 3"/>
                                    </svg>
                                </div>
                                <div class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs font-semibold">
                                    Orders
                                </div>
                            </div>

                            <div>
                                <p class="text-sm font-medium text-gray-500 mb-1">Total Transaksi</p>
                                <div class="flex items-baseline gap-2">
                                    <p class="text-4xl font-bold text-gray-800">{{ $totalOrders ?? 0 }}</p>
                                    <span class="text-sm text-gray-400">transaksi</span>
                                </div>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-2 text-xs text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Pembelian tiket berhasil</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Additional Info Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Quick Stats -->
                <div class="card bg-white shadow-lg border border-gray-200 rounded-2xl">
                    <div class="card-body p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <div class="w-1 h-6 bg-gradient-to-b from-gray-600 to-gray-800 rounded-full"></div>
                            Statistik Cepat
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                <span class="text-sm text-gray-600">Event Aktif</span>
                                <span class="font-bold text-gray-800">{{ $totalEvents ?? 0 }}</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                <span class="text-sm text-gray-600">Total Kategori</span>
                                <span class="font-bold text-gray-800">{{ $totalCategories ?? 0 }}</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                <span class="text-sm text-gray-600">Transaksi Sukses</span>
                                <span class="font-bold text-gray-800">{{ $totalOrders ?? 0 }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Welcome Card -->
                <div class="card bg-gradient-to-br from-gray-800 to-gray-900 text-white shadow-lg rounded-2xl overflow-hidden">
                    <div class="card-body p-6 relative">
                        <!-- Decorative circles -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -mr-16 -mt-16"></div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full -ml-12 -mb-12"></div>
                        
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-2">Selamat Datang! 👋</h3>
                            <p class="text-gray-300 mb-4">
                                Kelola event dan transaksi Anda dengan mudah melalui dashboard ini.
                            </p>
                            <div class="flex gap-3">
                                <a href="{{ route('admin.events.index') }}" class="px-4 py-2 bg-white text-gray-800 rounded-lg font-medium hover:bg-gray-100 transition-colors text-sm">
                                    Kelola Event
                                </a>
                                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-gray-700 text-white rounded-lg font-medium hover:bg-gray-600 transition-colors text-sm">
                                    Kelola Kategori
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layouts.admin>