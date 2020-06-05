<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

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
        if ($request->has('cari')) {
            $data_admin = \App\Admin::where('name','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_admin = \App\Admin::all();
        }
        return view ('admin.index',['data_admin' => $data_admin]);
        
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8',
            ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/admin/administrator')->with('sukses','Data berhasil disimpan!');
    } 

    public function edit($id)
    {
        $admin = \App\Admin::find($id);
        return view ('admin.edit',['admin' => $admin]);
    }

    public function up(Request $request, $id)
    {
        $admin = \App\Admin::find($id);
        // $admin->update($request->all());
        // whereId($id)->update($request->all());
        Admin::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/admin/administrator')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $admin = \App\Admin::find($id);
        $admin -> delete($admin);
        return redirect('/admin/administrator')->with('sukses','Data berhasil dihapus!');
    }

}
