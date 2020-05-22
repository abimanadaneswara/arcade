<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function user(Request $request)
    {
        // if ($request->has('cari')) {
        //     $data_ruangan = \App\Ruangan::where('nama_ruangan','LIKE','%'.$request->cari.'%')->get();
        // }else {
        //     $data_ruangan = \App\Ruangan::all();
        // }
        $data_user = \App\User::all();
        return view ('auth.index',['data_user' => $data_user]); 
    } 
}
