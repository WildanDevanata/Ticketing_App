<div class="drawer-side is-drawer-close:overflow-visible">
    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
    <div class="flex min-h-full flex-col items-start bg-gradient-to-b from-gray-800 to-gray-900 w-64 is-drawer-close:w-14 is-drawer-open:w-80 shadow-2xl">
        <!-- Logo Section with Gradient Background -->
        <div class="w-full flex items-center justify-center p-6 bg-gradient-to-r from-gray-700 to-gray-800 border-b border-gray-700">
            <div class="relative">
                <div class="absolute inset-0 bg-gray-500 blur-xl opacity-20 rounded-full"></div>
                <img
                    src="{{ asset('assets/images/logo_bengkod.jpg') }}"
                    alt="Logo"
                    class="w-[50px] h-[50px] object-contain rounded-lg relative z-10 ring-2 ring-gray-600 ring-offset-2 ring-offset-gray-800"
                >
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="menu w-full grow gap-2 p-4">
            <!-- Dashboard Item -->
            <li class="group">
                <a href="{{ route('admin.dashboard') }}" 
                   class="is-drawer-close:tooltip is-drawer-close:tooltip-right transition-all duration-300 hover:translate-x-1 {{ request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-gray-600 to-gray-700 text-white shadow-lg' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-xl" 
                   data-tip="Dashboard">
                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-gray-500' : 'bg-gray-800 group-hover:bg-gray-600' }} transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M6 19h3v-5q0-.425.288-.712T10 13h4q.425 0 .713.288T15 14v5h3v-9l-6-4.5L6 10zm-2 0v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-4q-.425 0-.712-.288T13 20v-5h-2v5q0 .425-.288.713T10 21H6q-.825 0-1.412-.587T4 19m8-6.75" />
                            </svg>
                        </div>
                        <span class="is-drawer-close:hidden font-medium">Dashboard</span>
                    </div>
                </a>
            </li>

            <!-- Kategori Item -->
            <li class="group">
                <a href="{{ route('admin.categories.index') }}" 
                   class="is-drawer-close:tooltip is-drawer-close:tooltip-right transition-all duration-300 hover:translate-x-1 {{ request()->routeIs('admin.categories.*') ? 'bg-gradient-to-r from-gray-600 to-gray-700 text-white shadow-lg' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-xl" 
                   data-tip="Kategori">
                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg {{ request()->routeIs('admin.categories.*') ? 'bg-gray-500' : 'bg-gray-800 group-hover:bg-gray-600' }} transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0a3 3 0 1 0-6 0" />
                            </svg>
                        </div>
                        <span class="is-drawer-close:hidden font-medium">Manajemen Kategori</span>
                    </div>
                </a>
            </li>

            <!-- Event Item -->
            <li class="group">
                <a href="{{ route('admin.events.index') }}" 
                   class="is-drawer-close:tooltip is-drawer-close:tooltip-right transition-all duration-300 hover:translate-x-1 {{ request()->routeIs('admin.events.*') ? 'bg-gradient-to-r from-gray-600 to-gray-700 text-white shadow-lg' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-xl" 
                   data-tip="Event">
                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg {{ request()->routeIs('admin.events.*') ? 'bg-gray-500' : 'bg-gray-800 group-hover:bg-gray-600' }} transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3a2 2 0 0 0 0-4V7a2 2 0 0 1 2-2" />
                            </svg>
                        </div>
                        <span class="is-drawer-close:hidden font-medium">Manajemen Event</span>
                    </div>
                </a>
            </li>

            <!-- History Item -->
            <li class="group">
                <a href="{{ route('admin.histories.index') }}" 
                   class="is-drawer-close:tooltip is-drawer-close:tooltip-right transition-all duration-300 hover:translate-x-1 {{ request()->routeIs('admin.histories.*') ? 'bg-gradient-to-r from-gray-600 to-gray-700 text-white shadow-lg' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-xl" 
                   data-tip="History">
                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg {{ request()->routeIs('admin.histories.*') ? 'bg-gray-500' : 'bg-gray-800 group-hover:bg-gray-600' }} transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <span class="is-drawer-close:hidden font-medium">History Pembelian</span>
                    </div>
                </a>
            </li>
        </ul>

        <!-- Logout Section -->
        <div class="w-full p-4 border-t border-gray-700">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" 
                        class="group w-full flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white rounded-xl transition-all duration-300 hover:shadow-lg hover:scale-105 is-drawer-close:tooltip is-drawer-close:tooltip-right" 
                        data-tip="Logout">
                    <div class="p-2 rounded-lg bg-red-800 group-hover:bg-red-900 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10 17v-2h4v-2h-4v-2l-5 3l5 3m9-12H5q-.825 0-1.413.588T3 7v10q0 .825.587 1.413T5 19h14q.825 0 1.413-.587T21 17v-3h-2v3H5V7h14v3h2V7q0-.825-.587-1.413T19 5z" />
                        </svg>
                    </div>
                    <span class="is-drawer-close:hidden font-medium">Logout</span>
                </button>
            </form>
        </div>
    </div>
</div>