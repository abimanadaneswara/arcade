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

    public function create(Request $request)
    {
        \App\Kategori::create($request->all());
        return redirect('/admin/kategori')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id_kategori)
    {
        $kategori = \App\Kategori::find($id_kategori);
        return view ('kategori.edit',['kategori' => $kategori]);
    }

    public function update(Request $request, $id_kategori)
    {
        $kategori = \App\Kategori::find($id_kategori);
        $kategori->update($request->all());
        return redirect('/admin/kategori')->with('sukses','Data berhasil diupdate!');
    }
}
