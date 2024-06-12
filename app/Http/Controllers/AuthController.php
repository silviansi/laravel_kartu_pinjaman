<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }
    public function login(Request $request){
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            //kalau otentikasi sukses
            if(Auth::user()-> role_id == 1) {
                return redirect('dashboard')->with('success', 'Login Berhasil');
            }

            if(Auth::user()->role_id == 2) {
                return redirect('profile');
            }
        } else {
            //kalau otentikasi gagal
            return back()->with('error', 'Email atau Password salah');
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('auth/login');
    }
    public function register() {
        return view('auth/register');
    }
    public function create(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:users',
            'nama' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Registrasi Berhasil');
    }
}   
