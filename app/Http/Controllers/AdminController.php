<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data dari table user
        $user = DB::table('user')->get();

        // mengirim data pegawai ke view index
        return view('admin/user', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('user')->insert([
            'nama' => $request->nama,
            'password' => $request->password,
            'email' => $request->email,
            'role' => $request->role,
            'status' => "enable",
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/Admin/kemahasiswaan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // mengambil data user berdasarkan id yang dipilih
        $user = DB::table('user')->where('user_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editUser', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // update data ke table user
        DB::table('user')->where('user_id',$request->id)->update([
            'nama' => $request->nama,
            'password' => $request->password,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus data user berdasarkan id yang dipilih
        DB::table('user')->where('user_id', $id)->delete();

        // alihkan halaman ke halaman user
        return redirect('/admin');
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahUser');
    }

    
}
