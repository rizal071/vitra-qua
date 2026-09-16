@extends('layouts.pelanggan')

@section('title', 'Detail Pesanan VQ-20260911-001 - Vitra Qua')

@section('content')
    <div class="bg-white rounded-lg border border-slate-200 shadow-sm space-y-6 p-6">

        <!-- HEADER: TOMBOL KEMBALI & NOMOR PESANAN -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-slate-200">
            <div class="flex items-center gap-3">
                <a href="{{ route('pelanggan.pesanan.index') }}"
                    class="p-1.5 border border-slate-300 rounded text-slate-600 hover:bg-slate-50 transition">
                    ←
                </a>
                <div>
                    <h1 class="text-base font-bold text-slate-800">Detail Pesanan: VQ-20260911-001</h1>
                    <p class="text-xs text-slate-500 mt-0.5">Dibuat pada 11 Sep 2026, 13:45 WIB</p>
                </div>
            </div>
            <span
                class="inline-block self-start sm:self-auto font-medium text-amber-600 bg-amber-50 px-3 py-1 rounded text-xs border border-amber-200">
                Sedang Dikirim oleh Kurir
            </span>
        </div>

        <!-- TRACKING STATUS / TIMELINE PENGIRIMAN -->
        <div class="p-4 bg-slate-50 rounded border border-slate-200">
            <h3 class="text-xs font-bold text-slate-800 mb-3">Status Pengiriman</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
                <div class="flex items-center gap-2 text-emerald-600 font-medium">
                    <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                    <span>1. Pesanan Dikonfirmasi</span>
                </div>
                <div class="flex items-center gap-2 text-emerald-600 font-medium">
                    <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                    <span>2. Air Siap / Diproses</span>
                </div>
                <div class="flex items-center gap-2 text-blue-600 font-bold">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-ping"></span>
                    <span>3. Sedang Diantar Kurir</span>
                </div>
            </div>
        </div>

        <!-- INFORMASI ALAMAT & KURIR -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Alamat Pengiriman -->
            <div class="space-y-1.5">
                <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider text-[11px] text-slate-400">Alamat
                    Pengiriman</h3>
                <p class="text-xs font-bold text-slate-800">Rizal Abdul Rosyid <span class="text-slate-500 font-normal">(+62
                        812-3456-7890)</span></p>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Jl. Raya Industri No. 12, RT 03/RW 04, Cikarang Selatan, Kabupaten Bekasi, Jawa Barat, 17530
                </p>
            </div>

            <!-- Info Kurir Pengantar -->
            <div class="space-y-1.5 md:border-l md:border-slate-200 md:pl-6">
                <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider text-[11px] text-slate-400">Petugas
                    Kurir</h3>
                <div class="flex items-center gap-3 pt-1">
                    <div
                        class="w-9 h-9 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center font-bold text-xs border border-blue-200">
                        🛵
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-800">Ahmad Subagja</p>
                        <p class="text-[11px] text-slate-500">Motor Delivery • B 4567 KLA</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- DAFTAR ITEM PRODUK -->
        <div class="border border-slate-200 rounded overflow-hidden">
            <div class="bg-slate-50 px-4 py-2.5 border-b border-slate-200 text-xs font-bold text-slate-700">
                Rincian Produk
            </div>
            <div class="divide-y divide-slate-100 p-4">
                <div class="flex items-center justify-between gap-4 py-2 first:pt-0 last:pb-0">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-12 h-12 bg-slate-100 border border-slate-200 rounded flex-shrink-0 flex items-center justify-center text-lg">
                            💧
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-800">Air Galon Vitra Qua 19 Liter (Isi Ulang)</h4>
                            <p class="text-[11px] text-slate-500">2 x Rp 18.000</p>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-slate-800">Rp 36.000</span>
                </div>
            </div>
        </div>

        <!-- RINCIAN PEMBAYARAN -->
        <div class="flex justify-end">
            <div class="w-full sm:w-72 space-y-2 text-xs">
                <div class="flex justify-between text-slate-600">
                    <span>Subtotal Produk</span>
                    <span>Rp 36.000</span>
                </div>
                <div class="flex justify-between text-slate-600">
                    <span>Biaya Pengantaran (Ongkir)</span>
                    <span>Rp 5.000</span>
                </div>
                <div class="flex justify-between text-slate-600">
                    <span>Diskon Voucher</span>
                    <span class="text-emerald-600">-Rp 5.000</span>
                </div>
                <div class="border-t border-slate-200 pt-2 flex justify-between font-bold text-slate-800 text-sm">
                    <span>Total Pembayaran</span>
                    <span class="text-blue-600">Rp 36.000</span>
                </div>
                <p class="text-[10px] text-slate-400 text-right pt-1">Metode Pembayaran: COD (Bayar di Tempat)</p>
            </div>
        </div>

    </div>
@endsection
