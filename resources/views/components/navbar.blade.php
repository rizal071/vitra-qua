<header x-data="{ accountOpen: false }" class="sticky top-0 z-50 bg-white border-b border-slate-200 shadow-sm font-sans">

    <!-- BARIS ATAS: LOGO + TEKS, SEARCH BAR, & ACTION ICONS -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between gap-4 md:gap-8">

        <!-- 1. BRAND LOGO -->
        <a href="{{ route('landing') }}" class="flex-shrink-0 flex items-center gap-1.5 group">
            <img src="{{ asset('images/logo.webp') }}" alt="Vitra Qua Logo" class="h-8 md:h-10 w-auto object-contain">
            <div class="flex flex-col justify-center">
                <span
                    class="font-heading text-base md:text-lg font-black text-blue-800 tracking-tight leading-none group-hover:text-blue-600 transition">
                    Vitra Qua
                </span>
            </div>
        </a>

        <!-- 2. SEARCH BAR TENGAH -->
        <div class="flex-1 max-w-2xl hidden md:block">
            <form action="{{ route('pelanggan.produk.index') }}" method="GET" class="relative flex items-center">
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Cari air galon, botol kemasan, atau promo..."
                    class="w-full text-xs pl-4 pr-10 py-2.5 bg-slate-50 border border-slate-300 rounded-full focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-1 focus:ring-blue-600 transition font-normal text-slate-800">
                <button type="submit"
                    class="absolute right-1 px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded-full transition flex items-center justify-center">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
        </div>

        <!-- 3. RIGHT ACTION ITEMS -->
        <div class="flex items-center gap-4 sm:gap-6 flex-shrink-0">

            <!-- ICON KERANJANG BELANJA -->
            <a href="{{ route('pelanggan.keranjang.index') }}"
                class="relative text-slate-700 hover:text-blue-600 transition flex items-center gap-1.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span class="hidden sm:inline text-xs font-semibold">Keranjang</span>
                <span
                    class="absolute -top-1.5 -right-2 bg-blue-600 text-white text-[10px] font-extrabold w-4 h-4 rounded-full flex items-center justify-center">
                    0
                </span>
            </a>

            <!-- DROPDOWN AKUN / USER -->
            @auth
                <div class="relative" @click.away="accountOpen = false">
                    <button @click="accountOpen = !accountOpen"
                        class="flex items-center gap-2 text-xs font-bold text-slate-800 hover:text-blue-600 focus:outline-none py-1">
                        <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="hidden md:inline truncate max-w-[120px] font-medium">{{ Auth::user()->name }}</span>
                        <svg class="w-3 h-3 text-slate-400 transition-transform duration-200"
                            :class="{ 'rotate-180': accountOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- POPUP MENU AKUN -->
                    <div x-show="accountOpen" x-cloak x-transition
                        class="absolute right-0 mt-2 w-52 bg-white rounded-lg shadow-lg border border-slate-200 py-1.5 z-50 overflow-hidden">
                        <div class="px-4 py-2 border-b border-slate-100 bg-slate-50">
                            <p class="text-[10px] text-slate-400 font-medium">Logged in as</p>
                            <p class="text-xs font-bold text-slate-800 truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <a href="{{ route('pelanggan.akun.profil') }}"
                            class="block px-4 py-2 text-xs font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600 transition">
                            Akun Saya / Profil
                        </a>
                        <a href="{{ route('pelanggan.pesanan.index') }}"
                            class="block px-4 py-2 text-xs font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600 transition">
                            Pesanan Saya
                        </a>
                        <a href="{{ route('pelanggan.akun.alamat') }}"
                            class="block px-4 py-2 text-xs font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600 transition">
                            Alamat Pengiriman
                        </a>

                        <div class="border-t border-slate-100 my-1"></div>

                        <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-xs font-medium text-red-600 hover:bg-red-50 transition">
                                Keluar / Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-1.5 rounded text-xs font-semibold shadow-sm transition">
                    Masuk / Daftar
                </a>
            @endauth

        </div>
    </div>

    <!-- BARIS BAWAH: NAVIGASI KATEGORI PRODUK -->
    <div class="border-t border-slate-100 bg-white">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-6 overflow-x-auto text-xs font-sans font-medium text-slate-700 py-2.5 no-scrollbar">

            {{-- ROUTE DIHUBUNGKAN KE HALAMAN DAFTAR PRODUK --}}
            <a href="{{ route('pelanggan.produk.index') }}"
                class="hover:text-blue-600 transition flex-shrink-0 {{ request()->routeIs('pelanggan.produk.index') ? 'text-blue-600 font-bold' : '' }}">
                Semua Produk
            </a>

            <a href="{{ route('pelanggan.produk.index', ['kategori' => 'galon']) }}"
                class="hover:text-blue-600 transition flex-shrink-0">Air Galon 19L</a>
            <a href="{{ route('pelanggan.produk.index', ['kategori' => 'botol']) }}"
                class="hover:text-blue-600 transition flex-shrink-0">Air Botol (Dus)</a>
            <a href="{{ route('pelanggan.produk.index', ['kategori' => 'aksesoris']) }}"
                class="hover:text-blue-600 transition flex-shrink-0">Dispenser & Pompa</a>
            <a href="{{ route('pelanggan.produk.index', ['promo' => '1']) }}"
                class="hover:text-blue-600 transition flex-shrink-0 text-red-600 font-semibold">Promo Hemat</a>
        </div>
    </div>

</header>
