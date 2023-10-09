<?php

namespace App\Http\Controllers;

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
        Session::flash('username', $request->username);
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            //kalau otentikasi sukses
            if(Auth::user()-> role_id == 1) {
                return redirect('dashboard');
            }

            if(Auth::user()->role_id == 2) {
                return redirect('profile');
            }
        } else {
            //kalau otentikasi gagal
            return redirect('login')->withErrors('Username dan Password tidak valid');
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
        Session::flash('username', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'username.required' => 'Usernama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silahkan gunakan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('auth/login');
        } else {
            return redirect('auth/register')->withErrors('Email dan password tidak valid');
        }
    }
}   
