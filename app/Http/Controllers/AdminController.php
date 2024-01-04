<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data dari table user
        $user = DB::table('users')->where('role', 'like', 'ukm')->get();

        // mengirim data pegawai ke view index
        return view('Admin/user', ['user' => $user]);
    }
    public function dosen()
    {
        // mengambil data dari table user
        $user = DB::table('users')->where('role', 'like', 'dosen')->get();

        // mengirim data pegawai ke view index
        return view('Admin/kemahasiswaan', ['user' => $user]);
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
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $data['name'] = $request->nama;
        $data['password'] = Hash::make($request->password);
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['status'] = "enable";
        $user = User::create($data);

        if (!$user) {
            return redirect(route('addUser'))->with("error", "Detail registrasi tidak valid");
        }

        return redirect(route('addUser'))->with("Success", "Registrasi akun berhasil");
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
        $user = DB::table('users')->where('id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin/editUser', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // update data ke table user
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->nama,
            'password' => $request->password,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
        ]);
        // alihkan halaman ke halaman pegawai
        if ($request->role == "ukm") {
            return redirect(route('user'));
        }else{
            return redirect(route('dosen'));
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function disable(string $id)
    {
        // mengambil data user berdasarkan id yang dikirim
        $user = User::find($id);

        // update status user menjadi disable
        $user->status = 'disable';
        $user->save();

        // kembali ke halaman user dengan pesan berhasil
        return Redirect::back()->with('success', 'User berhasil di-disable');

        // menghapus data user berdasarkan id yang dipilih
        // DB::table('user')->where('user_id', $id)->delete();

        // alihkan halaman ke halaman user
        // return redirect('/admin');
    }

    public function enable(string $id){
        // mengambil data user berdasarkan id yang dikirim
        $user = User::find($id);

        // update status user menjadi disable
        $user->status = 'enable';
        $user->save();

        // kembali ke halaman user dengan pesan berhasil
        return Redirect::back()->with('success', 'User berhasil di-enable');
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahUser');
    }
}
