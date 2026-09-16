@extends('layouts.pelanggan')

@section('title', 'Alamat Saya - Vitra Qua')

@section('content')
    <div class="bg-white rounded-lg border border-slate-200 shadow-sm" x-data="{ openModal: false, isEdit: false }">

        <!-- Header Halaman -->
        <div class="px-6 py-4 border-b border-slate-200 flex items-center justify-between">
            <div>
                <h1 class="text-base font-bold text-slate-800">Alamat Saya</h1>
                <p class="text-xs text-slate-500 mt-0.5">Kelola alamat pengiriman air galon dan produk Vitra Qua Anda.</p>
            </div>
            <button @click="openModal = true; isEdit = false"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs px-4 py-2 rounded shadow-sm transition flex items-center gap-1.5">
                <span class="text-sm leading-none">+</span>
                <span>Tambah Alamat Baru</span>
            </button>
        </div>

        <!-- Daftar Alamat Pengiriman -->
        <div class="p-6 divide-y divide-slate-100">

            <!-- ITEM ALAMAT 1 (UTAMA) -->
            <div class="py-4 first:pt-0 last:pb-0 flex flex-col md:flex-row md:items-start justify-between gap-4">
                <div class="space-y-1.5 flex-1">
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-bold text-slate-800">Rizal Abdul Rosyid</span>
                        <span class="text-slate-300">|</span>
                        <span class="text-xs text-slate-500">(+62) 812-3456-7890</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Jl. Raya Industri No. 12, RT 03/RW 04, Cikarang Selatan, Kabupaten Bekasi, Jawa Barat, 17530
                    </p>
                    <div class="pt-1">
                        <span
                            class="inline-block border border-blue-600 text-blue-600 text-[10px] font-medium px-1.5 py-0.5 rounded">
                            Utama
                        </span>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex md:flex-col items-end justify-between md:justify-start gap-2 flex-shrink-0">
                    <div class="flex items-center gap-2 text-xs">
                        <button @click="openModal = true; isEdit = true"
                            class="text-blue-600 hover:text-blue-700 font-medium">Ubah</button>
                        <span class="text-slate-300">|</span>
                        <button class="text-slate-400 hover:text-red-600 font-medium transition">Hapus</button>
                    </div>
                    <button disabled
                        class="text-[11px] border border-slate-200 text-slate-400 px-2 py-1 rounded bg-slate-50 cursor-not-allowed">
                        Atur Sebagai Utama
                    </button>
                </div>
            </div>

            <!-- ITEM ALAMAT 2 -->
            <div class="py-4 first:pt-0 last:pb-0 flex flex-col md:flex-row md:items-start justify-between gap-4">
                <div class="space-y-1.5 flex-1">
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-bold text-slate-800">Rizal (Kantor/Toko)</span>
                        <span class="text-slate-300">|</span>
                        <span class="text-xs text-slate-500">(+62) 857-1122-3344</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Kawasan Jababeka Phase 2 Blok B No. 5, Cikarang Utara, Kabupaten Bekasi, Jawa Barat, 17550
                    </p>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex md:flex-col items-end justify-between md:justify-start gap-2 flex-shrink-0">
                    <div class="flex items-center gap-2 text-xs">
                        <button @click="openModal = true; isEdit = true"
                            class="text-blue-600 hover:text-blue-700 font-medium">Ubah</button>
                        <span class="text-slate-300">|</span>
                        <button class="text-slate-400 hover:text-red-600 font-medium transition">Hapus</button>
                    </div>
                    <button
                        class="text-[11px] border border-slate-300 text-slate-700 hover:bg-slate-50 px-2 py-1 rounded transition">
                        Atur Sebagai Utama
                    </button>
                </div>
            </div>

        </div>

        <!-- MODAL POPUP TAMBAH / UBAH ALAMAT -->
        <div x-show="openModal" x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/40 backdrop-blur-sm p-4"
            x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <div class="bg-white rounded-lg shadow-lg border border-slate-200 w-full max-w-lg overflow-hidden"
                @click.away="openModal = false">

                <div class="px-6 py-4 border-b border-slate-200 flex items-center justify-between">
                    <h3 class="text-sm font-bold text-slate-800" x-text="isEdit ? 'Ubah Alamat' : 'Alamat Baru'"></h3>
                    <button @click="openModal = false"
                        class="text-slate-400 hover:text-slate-600 text-lg leading-none">&times;</button>
                </div>

                <form action="#" method="POST" class="p-6 space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-normal text-slate-500 mb-1">Nama Penerima</label>
                            <input type="text" placeholder="Nama Lengkap"
                                class="w-full text-xs px-3 py-2 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div>
                            <label class="block text-xs font-normal text-slate-500 mb-1">Nomor Telepon</label>
                            <input type="text" placeholder="08xxxxxxxxxx"
                                class="w-full text-xs px-3 py-2 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-normal text-slate-500 mb-1">Kota / Kecamatan / Kode Pos</label>
                        <input type="text" placeholder="Contoh: Cikarang Selatan, Bekasi 17530"
                            class="w-full text-xs px-3 py-2 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-xs font-normal text-slate-500 mb-1">Alamat Lengkap</label>
                        <textarea rows="3" placeholder="Nama jalan, nomor rumah, RT/RW, patokan lokasi..."
                            class="w-full text-xs p-3 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600"></textarea>
                    </div>

                    <div class="pt-2 flex items-center justify-end gap-2">
                        <button type="button" @click="openModal = false"
                            class="px-4 py-2 border border-slate-300 rounded text-xs font-medium text-slate-700 hover:bg-slate-50">
                            Batal
                        </button>
                        <button type="submit"
                            class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded text-xs font-medium shadow-sm">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
