@extends('layouts.app')

@section('title', 'Detail Produk - VitraQua')

@section('content')

    <!-- BREADCRUMB -->
    <div class="bg-slate-50/70 border-b border-slate-100 py-4 font-sans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-xs text-slate-500 flex items-center gap-2">
                <a href="{{ route('landing') }}" class="hover:text-blue-900 transition">Beranda</a>
                <span>/</span>
                <a href="#" class="hover:text-blue-900 transition">Semua Produk</a>
                <span>/</span>
                <span class="text-slate-800 font-semibold">Galon Isi Ulang 19 Liter</span>
            </nav>
        </div>
    </div>

    <!-- MAIN PRODUCT DETAIL SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 font-sans" x-data="{ qty: 1, tab: 'deskripsi' }">

        <!-- GRID UTAMA GAMBAR & INFORMASI -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

            <!-- GALERI GAMBAR KIRI (5/12) -->
            <div class="lg:col-span-5 space-y-4">
                <div
                    class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 flex items-center justify-center relative">
                    <span
                        class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-2.5 py-1 rounded-md shadow-sm">
                        -20%
                    </span>
                    <img src="https://placehold.co/400x400/transparent/0284c7?text=Galon+19L" alt="Galon Isi Ulang 19 Liter"
                        class="h-72 sm:h-80 object-contain drop-shadow-md" />
                </div>

                <!-- Thumbnail Pilihan Gambar -->
                <div class="grid grid-cols-4 gap-3">
                    <button type="button"
                        class="border-2 border-blue-900 rounded-xl p-2 bg-slate-50 flex items-center justify-center">
                        <img src="https://placehold.co/100x100/transparent/0284c7?text=1" alt="Thumb 1"
                            class="h-12 object-contain" />
                    </button>
                    <button type="button"
                        class="border border-slate-200 hover:border-slate-400 rounded-xl p-2 bg-slate-50 flex items-center justify-center transition">
                        <img src="https://placehold.co/100x100/transparent/0284c7?text=2" alt="Thumb 2"
                            class="h-12 object-contain" />
                    </button>
                    <button type="button"
                        class="border border-slate-200 hover:border-slate-400 rounded-xl p-2 bg-slate-50 flex items-center justify-center transition">
                        <img src="https://placehold.co/100x100/transparent/0284c7?text=3" alt="Thumb 3"
                            class="h-12 object-contain" />
                    </button>
                    <button type="button"
                        class="border border-slate-200 hover:border-slate-400 rounded-xl p-2 bg-slate-50 flex items-center justify-center transition">
                        <img src="https://placehold.co/100x100/transparent/0284c7?text=4" alt="Thumb 4"
                            class="h-12 object-contain" />
                    </button>
                </div>
            </div>

            <!-- INFORMASI PRODUK & CTA KANAN (7/12) -->
            <div class="lg:col-span-7 space-y-6">

                <div>
                    <span class="text-xs font-bold text-blue-900 tracking-wide uppercase">Air Galon 19L</span>
                    <h1 class="font-heading text-2xl sm:text-3xl font-extrabold text-slate-900 leading-tight mt-1">
                        Galon Isi Ulang 19 Liter VitraQua
                    </h1>

                    <div class="flex items-center gap-3 mt-3">
                        <div class="flex items-center gap-1 text-amber-500 text-xs">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            <span class="text-slate-700 font-semibold ml-1">4.9</span>
                        </div>
                        <span class="text-slate-300">•</span>
                        <span class="text-xs text-slate-600 font-medium">1.234 Ulasan</span>
                        <span class="text-slate-300">•</span>
                        <span
                            class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full border border-emerald-100">
                            Stok Tersedia
                        </span>
                    </div>
                </div>

                <!-- Harga -->
                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 flex items-baseline gap-3">
                    <span class="font-heading font-black text-blue-950 text-2xl sm:text-3xl">Rp 20.000</span>
                    <span class="text-sm font-semibold text-slate-600 line-through">Rp 25.000</span>
                    <span class="text-xs font-bold text-red-600 bg-red-50 px-2 py-0.5 rounded border border-red-100">Hemat
                        Rp 5.000</span>
                </div>

                <!-- Ringkasan Deskripsi -->
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    Air minum kemasan galon 19 Liter diproses secara higienis menggunakan teknologi penyaringan ultraviolet
                    steril. Keaslian mineral alami tetap terjaga untuk pemenuhan hidrasi sehat harian Anda.
                </p>

                <!-- Input Jumlah & Tombol Action -->
                <div class="space-y-4 pt-2">
                    <div class="flex items-center gap-4">
                        <span class="text-xs sm:text-sm font-bold text-slate-800">Jumlah:</span>
                        <div class="flex items-center border border-slate-300 rounded-xl overflow-hidden bg-white">
                            <button type="button" @click="qty = Math.max(1, qty - 1)"
                                class="px-3.5 py-2 text-slate-700 hover:bg-slate-100 transition font-bold text-sm">
                                -
                            </button>
                            <input type="number" x-model="qty" readonly
                                class="w-12 text-center text-xs sm:text-sm font-bold border-0 focus:outline-none focus:ring-0 text-slate-900">
                            <button type="button" @click="qty++"
                                class="px-3.5 py-2 text-slate-700 hover:bg-slate-100 transition font-bold text-sm">
                                +
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-2">
                        <button type="button"
                            class="flex-1 bg-emerald-900 hover:bg-emerald-950 text-white font-heading font-semibold py-3.5 px-6 rounded-xl text-xs sm:text-sm transition shadow-md flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span>+ Tambah ke Keranjang</span>
                        </button>

                        <button type="button"
                            class="bg-blue-900 hover:bg-blue-950 text-white font-heading font-semibold py-3.5 px-8 rounded-xl text-xs sm:text-sm transition shadow-md">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Keunggulan Singkat -->
                <div class="border-t border-slate-100 pt-5 grid grid-cols-2 gap-4 text-xs text-slate-600">
                    <div class="flex items-center gap-2.5">
                        <div class="w-7 h-7 rounded-lg bg-blue-50 text-blue-900 flex items-center justify-center font-bold">
                            ✓</div>
                        <span>Pengantaran Cepat Kurir Resmi</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <div class="w-7 h-7 rounded-lg bg-blue-50 text-blue-900 flex items-center justify-center font-bold">
                            ✓</div>
                        <span>Jaminan Tutup Galon Segel Asli</span>
                    </div>
                </div>

            </div>

        </div>

        <!-- TAB DESKRIPSI & SPESIFIKASI -->
        <div class="mt-14 bg-white rounded-2xl border border-slate-200/80 p-6 md:p-8">
            <div class="flex items-center gap-6 border-b border-slate-200 pb-4 text-sm font-bold">
                <button @click="tab = 'deskripsi'"
                    :class="tab === 'deskripsi' ? 'text-blue-900 border-b-2 border-blue-900 -mb-[18px] pb-4' :
                        'text-slate-500 hover:text-slate-800'">
                    Deskripsi Lengkap
                </button>
                <button @click="tab = 'spesifikasi'"
                    :class="tab === 'spesifikasi' ? 'text-blue-900 border-b-2 border-blue-900 -mb-[18px] pb-4' :
                        'text-slate-500 hover:text-slate-800'">
                    Spesifikasi & Kualitas
                </button>
            </div>

            <div class="pt-6">
                <!-- Content Deskripsi -->
                <div x-show="tab === 'deskripsi'" class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <p>
                        VitraQua Galon 19 Liter merupakan pilihan tepat untuk memenuhi kebutuhan air minum sehat keluarga di
                        rumah, perkantoran, maupun tempat usaha. Sumber air diproses dari mata air alami teruji melalui
                        teknologi filtrasi steril modern tanpa mengubah kandungan mineral penting tubuh.
                    </p>
                    <ul class="list-disc list-inside space-y-1 pl-2">
                        <li>Kadar pH seimbang ramah untuk pencernaan.</li>
                        <li>Proses sterilisasi galon multi-tahap secara menyeluruh.</li>
                        <li>Segel kemasan terjamin anti-bocor dan bebas pemalsuan.</li>
                    </ul>
                </div>

                <!-- Content Spesifikasi -->
                <div x-show="tab === 'spesifikasi'" x-cloak class="text-xs sm:text-sm text-slate-700">
                    <div class="max-w-xl space-y-3">
                        <div class="flex justify-between border-b border-slate-100 pb-2">
                            <span class="text-slate-500">Volume</span>
                            <span class="font-bold">19 Liter</span>
                        </div>
                        <div class="flex justify-between border-b border-slate-100 pb-2">
                            <span class="text-slate-500">Jenis Kemasan</span>
                            <span class="font-bold">Galon Isi Ulang (BPA Free)</span>
                        </div>
                        <div class="flex justify-between border-b border-slate-100 pb-2">
                            <span class="text-slate-500">Masa Simpan</span>
                            <span class="font-bold">6 Bulan (Segel Utuh)</span>
                        </div>
                        <div class="flex justify-between border-b border-slate-100 pb-2">
                            <span class="text-slate-500">Standar Sterilisasi</span>
                            <span class="font-bold">Mikro-Filtrasi & Sinar UV</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- REKOMENDASI PRODUK TERKAIT -->
        <div class="mt-12 space-y-6">
            <h2 class="font-heading text-xl font-bold text-slate-900">Produk Terkait Lainnya</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <!-- Card 1 -->
                <div
                    class="bg-white rounded-2xl p-4 flex flex-col justify-between shadow-sm hover:shadow-md border border-slate-200/80 transition duration-300 relative group">
                    <div class="h-36 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Botol+600ml" alt="Botol 600ml"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div class="space-y-2">
                        <h3 class="font-heading font-bold text-slate-900 text-xs sm:text-sm line-clamp-2">1 Dus Air Botol
                            600ml (24 Pcs)</h3>
                        <div class="flex items-end justify-between pt-1">
                            <div>
                                <span class="block font-heading font-extrabold text-blue-950 text-base">Rp 45.000</span>
                            </div>
                            <button aria-label="Tambah Keranjang"
                                class="w-9 h-9 rounded-xl bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-2xl p-4 flex flex-col justify-between shadow-sm hover:shadow-md border border-slate-200/80 transition duration-300 relative group">
                    <div class="h-36 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Botol+1.5L" alt="Botol 1.5L"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div class="space-y-2">
                        <h3 class="font-heading font-bold text-slate-900 text-xs sm:text-sm line-clamp-2">1 Dus Air Botol
                            1.5 Liter (12 Pcs)</h3>
                        <div class="flex items-end justify-between pt-1">
                            <div>
                                <span class="block font-heading font-extrabold text-blue-950 text-base">Rp 48.000</span>
                            </div>
                            <button aria-label="Tambah Keranjang"
                                class="w-9 h-9 rounded-xl bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-2xl p-4 flex flex-col justify-between shadow-sm hover:shadow-md border border-slate-200/80 transition duration-300 relative group">
                    <div class="h-36 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Dispenser" alt="Dispenser"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div class="space-y-2">
                        <h3 class="font-heading font-bold text-slate-900 text-xs sm:text-sm line-clamp-2">Pompa Galon
                            Elektrik Charge</h3>
                        <div class="flex items-end justify-between pt-1">
                            <div>
                                <span class="block font-heading font-extrabold text-blue-950 text-base">Rp 39.900</span>
                            </div>
                            <button aria-label="Tambah Keranjang"
                                class="w-9 h-9 rounded-xl bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-white rounded-2xl p-4 flex flex-col justify-between shadow-sm hover:shadow-md border border-slate-200/80 transition duration-300 relative group">
                    <div class="h-36 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Langganan" alt="Langganan"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div class="space-y-2">
                        <h3 class="font-heading font-bold text-slate-900 text-xs sm:text-sm line-clamp-2">Paket Langganan
                            10 Galon</h3>
                        <div class="flex items-end justify-between pt-1">
                            <div>
                                <span class="block font-heading font-extrabold text-blue-950 text-base">Rp 180.000</span>
                            </div>
                            <button aria-label="Tambah Keranjang"
                                class="w-9 h-9 rounded-xl bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection
