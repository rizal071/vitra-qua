@extends('layouts.pelanggan')

@section('title', 'Pembayaran & Checkout - Vitra Qua')

@section('content')
    <div class="bg-white rounded-lg border border-slate-200 shadow-sm space-y-6 p-6" x-data="{ paymentMethod: 'cod' }">

        <!-- HEADER -->
        <div class="flex items-center gap-3 pb-4 border-b border-slate-200">
            <a href="{{ route('pelanggan.keranjang.index') }}"
                class="p-1.5 border border-slate-300 rounded text-slate-600 hover:bg-slate-50 transition">
                ←
            </a>
            <div>
                <h1 class="text-base font-bold text-slate-800">Checkout / Pembayaran</h1>
                <p class="text-xs text-slate-500 mt-0.5">Periksa kembali alamat dan item sebelum menyelesaikan pesanan.</p>
            </div>
        </div>

        <form action="#" method="POST" class="space-y-6">
            @csrf

            <!-- 1. SEKSI ALAMAT PENGIRIMAN -->
            <div class="p-4 border border-slate-200 rounded bg-slate-50/50 space-y-2">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider text-[11px] text-slate-400">📍
                        Alamat Pengiriman</h3>
                    <a href="{{ route('pelanggan.akun.alamat') }}"
                        class="text-xs text-blue-600 hover:underline font-medium">Ubah Alamat</a>
                </div>
                <div class="text-xs text-slate-700">
                    <span class="font-bold text-slate-800">Rizal Abdul Rosyid</span>
                    <span class="text-slate-400">|</span>
                    <span>(+62) 812-3456-7890</span>
                    <p class="text-slate-600 mt-1 leading-relaxed">
                        Jl. Raya Industri No. 12, RT 03/RW 04, Cikarang Selatan, Kabupaten Bekasi, Jawa Barat, 17530
                    </p>
                </div>
            </div>

            <!-- 2. SEKSI ITEM DIBELI -->
            <div class="border border-slate-200 rounded overflow-hidden">
                <div class="bg-slate-50 px-4 py-2.5 border-b border-slate-200 text-xs font-bold text-slate-700">
                    Pesanan Produk
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

            <!-- 3. METODE PEMBAYARAN -->
            <div class="space-y-3">
                <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider text-[11px] text-slate-400">Metode
                    Pembayaran</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">

                    <!-- Pilihan COD -->
                    <label class="flex items-center justify-between p-3.5 border rounded cursor-pointer transition"
                        :class="paymentMethod === 'cod' ? 'border-blue-600 bg-blue-50/30' :
                            'border-slate-200 hover:bg-slate-50'">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="payment_method" value="cod" x-model="paymentMethod"
                                class="text-blue-600 focus:ring-blue-500">
                            <div>
                                <p class="font-bold text-slate-800">COD (Bayar di Tempat)</p>
                                <p class="text-[11px] text-slate-500 mt-0.5">Bayar tunai ke kurir saat air sampai.</p>
                            </div>
                        </div>
                        <span class="text-lg">💵</span>
                    </label>

                    <!-- Pilihan Transfer / QRIS -->
                    <label class="flex items-center justify-between p-3.5 border rounded cursor-pointer transition"
                        :class="paymentMethod === 'qris' ? 'border-blue-600 bg-blue-50/30' :
                            'border-slate-200 hover:bg-slate-50'">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="payment_method" value="qris" x-model="paymentMethod"
                                class="text-blue-600 focus:ring-blue-500">
                            <div>
                                <p class="font-bold text-slate-800">Transfer Bank / QRIS</p>
                                <p class="text-[11px] text-slate-500 mt-0.5">BCA, Mandiri, BRI, GoPay, OVO, ShopeePay</p>
                            </div>
                        </div>
                        <span class="text-lg">📲</span>
                    </label>

                </div>
            </div>

            <!-- 4. TOTAL PEMBAYARAN & SUBMIT -->
            <div class="border-t border-slate-200 pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div class="space-y-1 text-xs">
                    <div class="flex items-center gap-4 text-slate-600">
                        <span>Subtotal: <strong class="text-slate-800">Rp 36.000</strong></span>
                        <span>Ongkir: <strong class="text-slate-800">Rp 5.000</strong></span>
                    </div>
                    <div class="text-sm font-extrabold text-slate-800">
                        Total Biaya: <span class="text-blue-600">Rp 41.000</span>
                    </div>
                </div>

                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs px-8 py-2.5 rounded shadow-sm transition">
                    Buat Pesanan Sekarang
                </button>
            </div>

        </form>
    </div>
@endsection
