<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('customer.list_product', [
            'produks' => Produk::all()
        ]);
    }
}
