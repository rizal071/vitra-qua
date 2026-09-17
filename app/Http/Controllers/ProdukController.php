<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        // Mengarahkan ke file resources/views/produk/daftar-produk.blade.php
        return view('public.produk.daftar-produk');
    }

    public function show($id)
    {
        // Mengarahkan ke file resources/views/produk/detail-produk.blade.php
        return view('public.produk.detail-produk');
    }
}