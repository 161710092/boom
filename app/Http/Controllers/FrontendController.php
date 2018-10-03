<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use File;

class FrontendController extends Controller
{
     public function index()
    {
        return view ('frontend.index');
    }

    public function barang()
    {
        $barangs = Barang::all();
        return view ('product.index',compact('barangs')); 
    }

    public function singleproduct(Barang $barangs)
    {
        // $previous = Artikel::where('id', '<', $artikel->id)->orderBy('id', 'desc')->first();
        // $next = Artikel::where('id', '>', $artikel->id)->orderBy('id')->first();

        return view('product.singleproduct', compact('barangs'));
    }
}
