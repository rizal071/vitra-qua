@extends('layouts.app')

@section('title', 'Daftar Produk - VitraQua')

@section('content')

    <!-- BREADCRUMB & HEADER PAGE -->
    <div class="bg-slate-50/70 border-b border-slate-100 py-6 font-sans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-xs text-slate-500 mb-2 flex items-center gap-2">
                <a href="{{ route('landing') }}" class="hover:text-blue-900 transition">Beranda</a>
                <span>/</span>
                <span class="text-slate-800 font-semibold">Semua Produk</span>
            </nav>
            <h1 class="font-heading text-2xl md:text-3xl font-extrabold text-slate-900">
                Katalog Produk Air Mineral
            </h1>
            <p class="text-xs md:text-sm text-slate-600 mt-1">
                Pilih kebutuhan air minum berkualitas untuk keluarga dan bisnis Anda.
            </p>
        </div>
    </div>

    <!-- MAIN CONTENT SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 font-sans" x-data="{ mobileFilterOpen: false }">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- SIDEBAR FILTER (PRESISI SESUAI GAMBAR REFERENSI) -->
            <aside class="lg:col-span-1 font-sans">
                <div class="bg-white p-2 space-y-6">

                    <div class="pb-2 border-b border-slate-100">
                        <h2 class="font-heading font-bold text-slate-800 text-base md:text-lg">Filter Options</h2>
                    </div>

                    <form action="#" method="GET" class="space-y-6">

                        <!-- 1. By Categories -->
                        <div class="space-y-2.5">
                            <h3 class="font-heading font-bold text-xs text-slate-800">By Categories</h3>
                            <div class="space-y-2 text-xs text-slate-600">
                                <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                    <input type="checkbox" name="category[]" value="galon"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Air Galon 19L</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                    <input type="checkbox" name="category[]" value="botol"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Air Botol Kemasan</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                    <input type="checkbox" name="category[]" value="dus"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Paket Dus / Karton</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                    <input type="checkbox" name="category[]" value="aksesoris"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Dispenser & Pompa</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                    <input type="checkbox" name="category[]" value="gelas"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Air Kemasan Gelas</span>
                                </label>
                            </div>
                        </div>

                        <div class="border-t border-slate-100"></div>

                        <!-- 2. By Packaging Type -->
                        <div class="space-y-2.5">
                            <h3 class="font-heading font-bold text-xs text-slate-800">By Packaging Type</h3>
                            <div class="space-y-2 text-xs text-slate-600">
                                <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                    <input type="checkbox" name="packaging[]" value="bpa_free"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Galon BPA Free</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                    <input type="checkbox" name="packaging[]" value="pet_600"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Botol PET 600ml</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                    <input type="checkbox" name="packaging[]" value="pet_1500"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Botol PET 1.5L</span>
                                </label>
                            </div>
                        </div>

                        <div class="border-t border-slate-100"></div>

                        <!-- 3. Price (Range Slider UI) -->
                        <div class="space-y-2.5" x-data="{ price: 100000 }">
                            <h3 class="font-heading font-bold text-xs text-slate-800">Price</h3>
                            <p class="text-xs text-slate-600 font-semibold">Rp 10.000 - Rp <span
                                    x-text="Number(price).toLocaleString('id-ID')"></span></p>
                            <input type="range" min="10000" max="200000" step="5000" x-model="price"
                                class="w-full h-1 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-emerald-900">
                        </div>

                        <div class="border-t border-slate-100"></div>

                        <!-- 4. Review Rating -->
                        <div class="space-y-2.5">
                            <h3 class="font-heading font-bold text-xs text-slate-800">Review</h3>
                            <div class="space-y-2 text-xs text-slate-600">
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="review[]" value="5"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span class="flex items-center text-amber-400 gap-0.5">★★★★★ <span
                                            class="text-slate-700 ml-1">5 Star</span></span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="review[]" value="4"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span class="flex items-center text-amber-400 gap-0.5">★★★★<span
                                            class="text-slate-300">★</span> <span class="text-slate-700 ml-1">4
                                            Star</span></span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="review[]" value="3"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span class="flex items-center text-amber-400 gap-0.5">★★★<span
                                            class="text-slate-300">★★</span> <span class="text-slate-700 ml-1">3
                                            Star</span></span>
                                </label>
                            </div>
                        </div>

                        <div class="border-t border-slate-100"></div>

                        <!-- 5. By Promotions -->
                        <div class="space-y-2.5">
                            <h3 class="font-heading font-bold text-xs text-slate-800">By Promotions</h3>
                            <div class="space-y-2 text-xs text-slate-600">
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="promo[]" value="new"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>New Arrivals</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="promo[]" value="bestseller" checked
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span class="font-semibold text-slate-900">Best Sellers</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="promo[]" value="sale"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>On Sale</span>
                                </label>
                            </div>
                        </div>

                        <div class="border-t border-slate-100"></div>

                        <!-- 6. Availability -->
                        <div class="space-y-2.5">
                            <h3 class="font-heading font-bold text-xs text-slate-800">Availability</h3>
                            <div class="space-y-2 text-xs text-slate-600">
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="stock[]" value="instock" checked
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span class="font-semibold text-slate-900">In Stock</span>
                                </label>
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="stock[]" value="outstock"
                                        class="rounded text-emerald-800 focus:ring-emerald-800 w-4 h-4 border-slate-300">
                                    <span>Out of Stocks</span>
                                </label>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-900 hover:bg-blue-950 text-white font-semibold py-2.5 rounded-xl text-xs transition mt-4">
                            Apply Filter
                        </button>

                    </form>

                </div>
            </aside>

            <!-- LIST PRODUK -->
            <main class="lg:col-span-3 space-y-6">

                <!-- BARIS ATAS: KETERANGAN JUMLAH & SORTING -->
                <div
                    class="bg-white rounded-2xl border border-slate-200/80 p-4 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
                    <p class="text-xs md:text-sm text-slate-600">
                        Menampilkan produk terlaris VitraQua
                    </p>

                    <div class="flex items-center gap-3">
                        <label for="sort" class="text-xs text-slate-600 font-medium shrink-0">Urutkan:</label>
                        <select id="sort" name="sort"
                            class="text-xs md:text-sm bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 text-slate-800 focus:outline-none focus:border-blue-900">
                            <option value="populer">Paling Populer</option>
                            <option value="terbaru">Produk Terbaru</option>
                            <option value="harga-rendah">Harga: Rendah ke Tinggi</option>
                            <option value="harga-tinggi">Harga: Tinggi ke Rendah</option>
                        </select>
                    </div>
                </div>

                <!-- PRODUCT GRID (TANPA NESTED CARDS & LOLOS AUDIT) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">

                    @php
                        $sampleProducts = [
                            [
                                'nama' => 'Galon Isi Ulang 19 Liter',
                                'harga' => 20000,
                                'coret' => 25000,
                                'diskon' => '-20%',
                                'rating' => '1.234',
                                'img' => 'Galon+19L',
                            ],
                            [
                                'nama' => '1 Dus Air Botol 600ml (24 Pcs)',
                                'harga' => 45000,
                                'coret' => 52000,
                                'diskon' => '-15%',
                                'rating' => '812',
                                'img' => 'Botol+600ml',
                            ],
                            [
                                'nama' => '1 Dus Air Botol 1.5 Liter (12 Pcs)',
                                'harga' => 48000,
                                'coret' => 64000,
                                'diskon' => '-25%',
                                'rating' => '545',
                                'img' => 'Botol+1.5L',
                            ],
                            [
                                'nama' => 'Paket Langganan 10 Galon',
                                'harga' => 180000,
                                'coret' => 200000,
                                'diskon' => '-10%',
                                'rating' => '963',
                                'img' => 'Langganan',
                            ],
                            [
                                'nama' => 'Pompa Galon Elektrik Charge',
                                'harga' => 39900,
                                'coret' => 49900,
                                'diskon' => '-20%',
                                'rating' => '1.108',
                                'img' => 'Dispenser',
                            ],
                            [
                                'nama' => '1 Dus Air Botol Mini 330ml (24 Pcs)',
                                'harga' => 38000,
                                'coret' => null,
                                'diskon' => null,
                                'rating' => '420',
                                'img' => 'Botol+330ml',
                            ],
                        ];
                    @endphp

                    @foreach ($sampleProducts as $p)
                        <div
                            class="bg-white rounded-2xl p-4 flex flex-col justify-between shadow-sm hover:shadow-md border border-slate-200/80 transition duration-300 relative group">

                            @if ($p['diskon'])
                                <span
                                    class="absolute top-3 left-3 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded-md z-10 shadow-sm">
                                    {{ $p['diskon'] }}
                                </span>
                            @endif

                            <a href="#" class="h-44 w-full flex items-center justify-center p-2 mb-2">
                                <img src="https://placehold.co/200x200/transparent/0284c7?text={{ $p['img'] }}"
                                    alt="{{ $p['nama'] }}"
                                    class="h-full object-contain group-hover:scale-105 transition" />
                            </a>

                            <div class="space-y-2">
                                <a href="#"
                                    class="font-heading font-bold text-slate-900 text-sm md:text-base line-clamp-2 hover:text-blue-900 transition">
                                    {{ $p['nama'] }}
                                </a>

                                <div class="flex items-center gap-1 text-amber-500 text-xs">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                    <span class="text-slate-700 font-medium ml-1 text-xs">({{ $p['rating'] }})</span>
                                </div>

                                <div class="flex items-end justify-between pt-2">
                                    <div>
                                        <span
                                            class="block font-heading font-extrabold text-blue-950 text-base md:text-lg leading-tight">
                                            Rp {{ number_format($p['harga'], 0, ',', '.') }}
                                        </span>
                                        @if ($p['coret'])
                                            <span class="block text-xs font-semibold text-slate-600 line-through">
                                                Rp {{ number_format($p['coret'], 0, ',', '.') }}
                                            </span>
                                        @endif
                                    </div>
                                    <button aria-label="Tambah Keranjang"
                                        class="w-10 h-10 rounded-xl bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>

            </main>

        </div>
    </section>

@endsection
