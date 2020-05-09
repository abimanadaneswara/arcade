<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori()
    {
        $data_kategori = \App\Kategori::all();
        return view ('kategori.index',['data_kategori' => $data_kategori]);
    }
}
