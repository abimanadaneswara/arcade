<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
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
    

    // public function create(Request $request)
    // {
    //     \App\Ruangan::create($request->all());
    //     if ($request->hasFile('foto')) {
    //         $request->file('foto')->move('ruangan/',$request->file('foto')->getClientOriginalName());
    //         $request->foto = $request->file('foto')->getClientOriginalName();
    //         // $request->save();
    //     }
    //     return redirect('/admin/ruangan')->with('sukses','Data berhasil disimpan!');
    // }

    // public function store(Request $request)
    // {
    //     Ruangan::create([
    //         'nama_ruangan' => $request->nama_ruangan,
    //         'kategori_id_kategori' => $request->kategori_id_kategori,
    //         'id_pemilik' => $request->id_pemilik,
    //         'harga' => $request->harga,
    //         'ukuran' => $request->ukuran,
    //         'kapasitas' => $request->kapasitas,
    //         'alamat_ruangan' => $request->alamat_ruangan,
    //         'kecamatan' => $request->kecamatan,
    //         'kabupaten' => $request->kabupaten,
    //         'provinsi' => $request->provinsi,
    //         'deskripsi' => $request->deskripsi,
    //         'foto' => $request->file('foto')->store('ruangan'),
    //     ]);
    //     return redirect('/admin/ruangan')->with('sukses','Data berhasil disimpan!');
    // }
    
    public function create(Request $request)
    {
        $file = $request->file('foto');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'ruangan';
		$file->move($tujuan_upload,$nama_file);
 
		Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan,
            'kategori_id_kategori' => $request->kategori_id_kategori,
            'id_pemilik' => $request->id_pemilik,
            'harga' => $request->harga,
            'ukuran' => $request->ukuran,
            'kapasitas' => $request->kapasitas,
            'alamat_ruangan' => $request->alamat_ruangan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'deskripsi' => $request->deskripsi,
            'foto' => $nama_file,
		]);
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
        $file = $request->file('foto');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'ruangan';
		$file->move($tujuan_upload,$nama_file);
        // $ruangan->update($request->all());
        // if ($request->hasFile('foto')) {
        //     $request->file('foto')->move('ruangan/',$request->file('foto')->getClientOriginalName());
        //     $ruangan->foto = $request->file('foto')->getClientOriginalName();
        //     $ruangan->save();
        // }
        Ruangan::whereid_ruangan($id_ruangan)->update([
            'nama_ruangan' => $request->nama_ruangan,
            'kategori_id_kategori' => $request->kategori_id_kategori,
            'id_pemilik' => $request->id_pemilik,
            'harga' => $request->harga,
            'ukuran' => $request->ukuran,
            'kapasitas' => $request->kapasitas,
            'alamat_ruangan' => $request->alamat_ruangan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'deskripsi' => $request->deskripsi,
            'foto' => $nama_file,
        ]);
        return redirect('/admin/ruangan')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id_ruangan)
    {
        $ruangan = \App\Ruangan::find($id_ruangan);
        $ruangan -> delete($ruangan);
        return redirect('/admin/ruangan')->with('sukses','Data berhasil dihapus!');
    }

}
