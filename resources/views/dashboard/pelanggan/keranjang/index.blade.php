@extends('layouts.pelanggan')

@section('title', 'Keranjang Saya - Vitra Qua')

@section('content')
    <div class="bg-white rounded-lg border border-slate-200 shadow-sm" x-data="{
        items: [
            { id: 1, name: 'Air Galon Vitra Qua 19 Liter (Isi Ulang)', price: 18000, qty: 2, checked: true, icon: '💧' },
            { id: 2, name: 'Air Mineral Botol 600ml (1 Dus / 24 Botol)', price: 45000, qty: 1, checked: false, icon: '📦' }
        ],
        get total() {
            return this.items.filter(i => i.checked).reduce((sum, i) => sum + (i.price * i.qty), 0);
        },
        get totalCheckedCount() {
            return this.items.filter(i => i.checked).length;
        },
        toggleAll(e) {
            this.items.forEach(i => i.checked = e.target.checked);
        }
    }">

        <!-- Header Halaman -->
        <div class="px-6 py-4 border-b border-slate-200">
            <h1 class="text-base font-bold text-slate-800">Keranjang Belanja</h1>
            <p class="text-xs text-slate-500 mt-0.5">Pilih produk air galon dan kemasan yang ingin Anda pesan.</p>
        </div>

        <!-- TAMPILAN KERANJANG ADA ISI -->
        <template x-if="items.length > 0">
            <div class="p-6 flex flex-col lg:flex-row gap-6">

                <!-- LIST ITEM KERANJANG (KIRI) -->
                <div class="flex-1 space-y-4">

                    <!-- Checkbox Pilih Semua -->
                    <div
                        class="flex items-center justify-between pb-3 border-b border-slate-200 text-xs text-slate-600 font-medium">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" @change="toggleAll" :checked="items.every(i => i.checked)"
                                class="text-blue-600 focus:ring-blue-500 w-4 h-4 rounded border-slate-300">
                            <span>Pilih Semua (<span x-text="items.length"></span>)</span>
                        </label>
                        <button @click="items = []" class="text-slate-400 hover:text-red-600 transition">Hapus
                            Semua</button>
                    </div>

                    <!-- Iterasi Daftar Produk -->
                    <template x-for="(item, index) in items" :key="item.id">
                        <div class="flex items-center gap-4 p-4 border border-slate-200 rounded bg-white">
                            <!-- Checkbox Item -->
                            <input type="checkbox" x-model="item.checked"
                                class="text-blue-600 focus:ring-blue-500 w-4 h-4 rounded border-slate-300">

                            <!-- Icon/Gambar Produk -->
                            <div class="w-16 h-16 bg-slate-100 border border-slate-200 rounded flex-shrink-0 flex items-center justify-center text-xl"
                                x-text="item.icon">
                            </div>

                            <!-- Info Produk -->
                            <div class="flex-1 min-w-0">
                                <h3 class="text-xs font-bold text-slate-800 truncate" x-text="item.name"></h3>
                                <p class="text-xs font-semibold text-blue-600 mt-1"
                                    x-text="'Rp ' + item.price.toLocaleString('id-ID')"></p>
                            </div>

                            <!-- Pengatur Jumlah (Quantity) & Hapus -->
                            <div class="flex flex-col sm:flex-row items-end sm:items-center gap-3">
                                <div class="flex items-center border border-slate-300 rounded overflow-hidden">
                                    <button @click="if(item.qty > 1) item.qty--"
                                        class="px-2.5 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 text-xs font-bold border-r border-slate-300 transition">-</button>
                                    <span class="px-3 py-1 text-xs font-bold text-slate-800" x-text="item.qty"></span>
                                    <button @click="item.qty++"
                                        class="px-2.5 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 text-xs font-bold border-l border-slate-300 transition">+</button>
                                </div>
                                <button @click="items.splice(index, 1)"
                                    class="text-slate-400 hover:text-red-600 text-xs transition">
                                    🗑️
                                </button>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- RINGKASAN BELANJA (KANAN) -->
                <div class="w-full lg:w-80 flex-shrink-0">
                    <div class="p-5 border border-slate-200 rounded bg-slate-50 space-y-4 sticky top-20">
                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider">Ringkasan Pesanan</h3>

                        <div class="space-y-2 text-xs text-slate-600">
                            <div class="flex justify-between">
                                <span>Produk Dipilih</span>
                                <span class="font-semibold text-slate-800" x-text="totalCheckedCount + ' Item'"></span>
                            </div>
                            <div class="flex justify-between">
                                <span>Subtotal</span>
                                <span class="font-semibold text-slate-800"
                                    x-text="'Rp ' + total.toLocaleString('id-ID')"></span>
                            </div>
                        </div>

                        <div class="border-t border-slate-200 pt-3 flex justify-between items-center">
                            <span class="text-xs font-bold text-slate-800">Total Harga</span>
                            <span class="text-sm font-extrabold text-blue-600"
                                x-text="'Rp ' + total.toLocaleString('id-ID')"></span>
                        </div>

                        <a href="{{ route('pelanggan.keranjang.bayar') }}"
                            :class="totalCheckedCount === 0 ? 'pointer-events-none opacity-50 bg-slate-400' :
                                'bg-blue-600 hover:bg-blue-700'"
                            class="block text-center text-white font-medium text-xs px-4 py-2.5 rounded shadow-sm transition">
                            Beli / Checkout (<span x-text="totalCheckedCount"></span>)
                        </a>
                    </div>
                </div>

            </div>
        </template>

        <!-- TAMPILAN KERANJANG KOSONG -->
        <template x-if="items.length === 0">
            <div class="py-16 text-center flex flex-col items-center justify-center">
                <div
                    class="w-16 h-16 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center text-2xl mb-3 border border-slate-200">
                    🛒
                </div>
                <h3 class="text-xs font-bold text-slate-700">Keranjang belanja Anda kosong</h3>
                <p class="text-[11px] text-slate-400 mt-0.5 mb-4">Mari isi keranjang Anda dengan pesanan air mineral
                    berkualitas.</p>
                <a href="{{ route('landing') }}"
                    class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded text-xs font-medium transition shadow-sm">
                    Pesan Sekarang
                </a>
            </div>
        </template>

    </div>
@endsection
