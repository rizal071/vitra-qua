@extends('layouts.pelanggan')

@section('title', 'Pesanan Saya - Vitra Qua')

@section('content')
    <div class="bg-white rounded-lg border border-slate-200 shadow-sm" x-data="{ tab: 'semua' }">

        <!-- TAB STATUS PESANAN -->
        <div
            class="border-b border-slate-200 flex items-center justify-between overflow-x-auto text-xs font-medium text-slate-600">
            <button @click="tab = 'semua'"
                :class="tab === 'semua' ? 'text-blue-600 border-b-2 border-blue-600 font-bold bg-slate-50/50' :
                    'hover:text-slate-900'"
                class="px-5 py-3.5 transition flex-shrink-0">
                Semua
            </button>
            <button @click="tab = 'belum-bayar'"
                :class="tab === 'belum-bayar' ? 'text-blue-600 border-b-2 border-blue-600 font-bold bg-slate-50/50' :
                    'hover:text-slate-900'"
                class="px-5 py-3.5 transition flex-shrink-0">
                Belum Bayar
            </button>
            <button @click="tab = 'dikemas'"
                :class="tab === 'dikemas' ? 'text-blue-600 border-b-2 border-blue-600 font-bold bg-slate-50/50' :
                    'hover:text-slate-900'"
                class="px-5 py-3.5 transition flex-shrink-0">
                Sedang Dikemas
            </button>
            <button @click="tab = 'dikirim'"
                :class="tab === 'dikirim' ? 'text-blue-600 border-b-2 border-blue-600 font-bold bg-slate-50/50' :
                    'hover:text-slate-900'"
                class="px-5 py-3.5 transition flex-shrink-0">
                Dikirim
            </button>
            <button @click="tab = 'selesai'"
                :class="tab === 'selesai' ? 'text-blue-600 border-b-2 border-blue-600 font-bold bg-slate-50/50' :
                    'hover:text-slate-900'"
                class="px-5 py-3.5 transition flex-shrink-0">
                Selesai
            </button>
            <button @click="tab = 'dibatalkan'"
                :class="tab === 'dibatalkan' ? 'text-blue-600 border-b-2 border-blue-600 font-bold bg-slate-50/50' :
                    'hover:text-slate-900'"
                class="px-5 py-3.5 transition flex-shrink-0">
                Dibatalkan
            </button>
        </div>

        <!-- SEARCH BAR PESANAN -->
        <div class="p-4 bg-slate-50/50 border-b border-slate-200">
            <div class="relative max-w-full">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-400 text-xs">
                    🔍
                </span>
                <input type="text" placeholder="Cari berdasarkan No. Pesanan atau Nama Produk"
                    class="w-full pl-9 pr-4 py-2 bg-white border border-slate-300 rounded text-xs focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition text-slate-800">
            </div>
        </div>

        <!-- DAFTAR KARTU PESANAN -->
        <div class="p-6 space-y-4">

            <!-- KARTU PESANAN 1 (SEDANG DIKIRIM) -->
            <div x-show="tab === 'semua' || tab === 'dikirim'"
                class="border border-slate-200 rounded bg-white p-4 space-y-3">
                <!-- Header Kartu -->
                <div class="flex items-center justify-between border-b border-slate-100 pb-2.5 text-xs">
                    <div class="flex items-center gap-2">
                        <span class="font-bold text-slate-800">VQ-20260911-001</span>
                        <span class="text-slate-300">|</span>
                        <span class="text-slate-500">11 Sep 2026</span>
                    </div>
                    <span
                        class="font-medium text-amber-600 bg-amber-50 px-2 py-0.5 rounded text-[11px] border border-amber-200">
                        Sedang Dikirim oleh Kurir
                    </span>
                </div>

                <!-- Detail Produk -->
                <div class="flex items-center gap-4">
                    <div
                        class="w-16 h-16 bg-slate-100 border border-slate-200 rounded flex-shrink-0 flex items-center justify-center text-xl">
                        💧
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="text-xs font-bold text-slate-800 truncate">Air Galon Vitra Qua 19 Litur (Isi Ulang)</h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">Jumlah: 2 Galon</p>
                        <p class="text-xs font-semibold text-slate-700 mt-1">Rp 18.000 / galon</p>
                    </div>
                </div>

                <!-- Footer Kartu & Total -->
                <div class="border-t border-slate-100 pt-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="text-xs">
                        <span class="text-slate-500">Total Pesanan: </span>
                        <span class="font-bold text-blue-600 text-sm">Rp 36.000</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('pelanggan.pesanan.detail', 1) }}"
                            class="px-3 py-1.5 border border-slate-300 text-slate-700 hover:bg-slate-50 rounded text-xs font-medium transition">
                            Lacak Kurir
                        </a>
                        <a href="{{ route('pelanggan.pesanan.detail', 1) }}"
                            class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded text-xs font-medium transition">
                            Detail Pesanan
                        </a>
                    </div>
                </div>
            </div>

            <!-- KARTU PESANAN 2 (SELESAI) -->
            <div x-show="tab === 'semua' || tab === 'selesai'"
                class="border border-slate-200 rounded bg-white p-4 space-y-3">
                <!-- Header Kartu -->
                <div class="flex items-center justify-between border-b border-slate-100 pb-2.5 text-xs">
                    <div class="flex items-center gap-2">
                        <span class="font-bold text-slate-800">VQ-20260905-089</span>
                        <span class="text-slate-300">|</span>
                        <span class="text-slate-500">05 Sep 2026</span>
                    </div>
                    <span
                        class="font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded text-[11px] border border-emerald-200">
                        Selesai
                    </span>
                </div>

                <!-- Detail Produk -->
                <div class="flex items-center gap-4">
                    <div
                        class="w-16 h-16 bg-slate-100 border border-slate-200 rounded flex-shrink-0 flex items-center justify-center text-xl">
                        📦
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="text-xs font-bold text-slate-800 truncate">Air Mineral Botol 600ml (1 Dus / 24 Botol)
                        </h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">Jumlah: 1 Dus</p>
                        <p class="text-xs font-semibold text-slate-700 mt-1">Rp 45.000</p>
                    </div>
                </div>

                <!-- Footer Kartu & Total -->
                <div class="border-t border-slate-100 pt-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="text-xs">
                        <span class="text-slate-500">Total Pesanan: </span>
                        <span class="font-bold text-slate-800 text-sm">Rp 45.000</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded text-xs font-medium transition">
                            Beli Lagi
                        </button>
                    </div>
                </div>
            </div>

            <!-- TAMPILAN JIKA TIDAK ADA PESANAN (EMPTY STATE) -->
            <div x-show="tab === 'belum-bayar' || tab === 'dibatalkan'"
                class="py-12 text-center flex flex-col items-center justify-center">
                <div
                    class="w-16 h-16 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center text-2xl mb-3 border border-slate-200">
                    📋
                </div>
                <h3 class="text-xs font-bold text-slate-700">Tidak ada pesanan</h3>
                <p class="text-[11px] text-slate-400 mt-0.5">Belum ada riwayat pesanan untuk kategori status ini.</p>
            </div>

        </div>

    </div>
@endsection
