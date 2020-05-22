<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function ruangan(Request $request)
    {
        if ($request->has('cari')) {
            $data_ruangan = \App\Ruangan::where('nama_ruangan','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_ruangan = \App\Ruangan::all();
        }
        return view ('ruangan.index',['data_ruangan' => $data_ruangan]); 
    } 
    

    public function create(Request $request)
    {
        \App\Ruangan::create($request->all());
        return redirect('/admin/ruangan')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id_ruangan)
    {
        $ruangan = \App\Ruangan::find($id_ruangan);
        return view ('ruangan.edit',['ruangan' => $ruangan]);
    }

    public function update(Request $request, $id_ruangan)
    {
        $ruangan = \App\Ruangan::find($id_ruangan);
        $ruangan->update($request->all());
        return redirect('/admin/ruangan')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id_ruangan)
    {
        $ruangan = \App\Ruangan::find($id_ruangan);
        $ruangan -> delete($ruangan);
        return redirect('/admin/ruangan')->with('sukses','Data berhasil dihapus!');
    }

}
