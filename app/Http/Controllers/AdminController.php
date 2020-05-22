<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function admin(Request $request)
    {
        // if ($request->has('cari')) {
        //     $data_admin = \App\Admin::where('nama_admin','LIKE','%'.$request->cari.'%')->get();
        // }else {
        //     $data_admin = \App\Admin::all();
        // }
        $data_admin = \App\Admin::all();
        return view ('admin.index',['data_admin' => $data_admin]);
        
    }

    // public function create(Request $request)
    // {
    //     \App\Admin::create($request->all());
    //     return redirect('/admin/administrator')->with('sukses','Data berhasil disimpan!');
    // }

    // public function edit($id)
    // {
    //     $kategori = \App\Admin::find($id);
    //     return view ('admin.edit',['admin' => $admin]);
    // }

    // public function update(Request $request, $id)
    // {
    //     $admin = \App\Admin::find($id);
    //     $admin->update($request->all());
    //     return redirect('/admin/administrator')->with('sukses','Data berhasil diupdate!');
    // }

    // public function delete($id)
    // {
    //     $admin = \App\Admin::find($admin);
    //     $admin -> delete($admin);
    //     return redirect('/admin/administrator')->with('sukses','Data berhasil dihapus!');
    // }
}
