<nav x-data="{ scrolled: false, accountOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="scrolled ? 'bg-white/90 backdrop-blur-md shadow-sm border-b border-slate-100/50' :
        'bg-transparent border-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">

    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Brand Logo -->
        <a href="{{ route('landing') }}" class="flex items-center gap-2">
            <div>
                <span class="text-2xl font-black text-blue-950 tracking-tight">Vitra Qua</span>
                <span class="block text-[9px] font-semibold text-blue-900/80 uppercase tracking-widest -mt-1">
                    Water Delivery Company
                </span>
            </div>
        </a>

        <!-- Navigation Links -->
        <div class="hidden lg:flex items-center space-x-6 text-xs font-bold text-blue-950 uppercase tracking-wider">
            <a href="{{ route('landing') }}" class="hover:text-blue-600 transition">Home</a>
            <a href="#products" class="hover:text-blue-600 transition">Produk</a>
            <a href="#blog" class="hover:text-blue-600 transition">Blog</a>
            <a href="#contact" class="hover:text-blue-600 transition">Contact</a>
        </div>

        <!-- Right Action Items -->
        <div class="flex items-center gap-4">

            @auth
                <!-- MY ACCOUNT DROPDOWN -->
                <div class="relative" @click.away="accountOpen = false">
                    <button @click="accountOpen = !accountOpen"
                        class="flex items-center gap-2 text-xs font-bold text-blue-950 hover:text-blue-600 transition focus:outline-none bg-blue-900/5 hover:bg-blue-900/10 px-4 py-2 rounded-full border border-blue-900/10">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="{ 'rotate-180': accountOpen }"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Content -->
                    <div x-show="accountOpen" x-cloak x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50 overflow-hidden">

                        <!-- Header Akun -->
                        <div class="px-4 py-2.5 bg-slate-50 border-b border-slate-100">
                            <p class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider">Logged in as</p>
                            <p class="text-xs font-bold text-blue-950 truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <!-- 1. KERANJANG SAYA -->
                        <a href="{{ route('pelanggan.keranjang.index') }}"
                            class="flex items-center justify-between px-4 py-2.5 text-xs font-bold text-slate-700 hover:bg-sky-50 hover:text-blue-600 transition border-b border-slate-100">
                            <span>Keranjang Saya</span>
                            <span class="bg-blue-100 text-blue-800 text-[10px] font-extrabold px-2 py-0.5 rounded-full">
                                0 Items (Rp 0)
                            </span>
                        </a>

                        <!-- 2. DASHBOARD SAYA (DIARAHKAN KETEPATAN KE PROFIL PELANGGAN) -->
                        <a href="{{ route('pelanggan.akun.profil') }}"
                            class="block px-4 py-2.5 text-xs font-bold text-slate-700 hover:bg-sky-50 hover:text-blue-600 transition">
                            Dashboard Saya
                        </a>

                        <div class="border-t border-slate-100 my-1"></div>

                        <!-- 3. LOGOUT -->
                        <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2.5 text-xs font-bold text-red-600 hover:bg-red-50 transition">
                                Keluar / Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- TOMBOL LOGIN (SAAT BELUM LOGIN) -->
                <a href="{{ route('login') }}"
                    class="bg-blue-900 hover:bg-blue-950 text-white px-5 py-2 rounded-full text-xs font-bold shadow-md transition transform hover:-translate-y-0.5">
                    Masuk / Login
                </a>
            @endauth

            <!-- Tombol Hubungi Kami -->
            <a href="#contact"
                class="hidden md:inline-flex items-center gap-1.5 bg-sky-100 text-blue-950 px-4 py-2 rounded-full text-xs font-bold hover:bg-sky-200 transition">
                <span>📞</span>
                <span>Hubungi Kami</span>
            </a>

        </div>
    </div>
</nav>
