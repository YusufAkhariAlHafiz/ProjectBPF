<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login()
    {
        return view('auth/login');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Jika proses autentikasi berhasil, dapatkan pengguna yang sedang login
            $user = Auth::user();

            // Set data pengguna ke dalam sesi
            session([
                'user_id' => $user->id,
                'user_nama' => $user->name,
                'user_role' => $user->role,
                'user_email' => $user->email,
            ]);

            // Redirect ke halaman yang sesuai dengan peran pengguna
            if ($user->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($user->role === 'dosen') {
                return redirect()->intended(route('user.dashboard'));
            } else {
                return redirect()->intended(route('user.dashboard'));
            }
            return redirect()->intended('/Admin/home');
        }
        return redirect(route('login'))->with("error", "Detail login tidak valid");
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }


}
