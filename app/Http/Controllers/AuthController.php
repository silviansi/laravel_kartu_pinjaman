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
        Session::flash('username', $request->username);
        Session::flash('nama', $request->nama);
        Session::flash('kebun', $request->kebun);
        Session::flash('luas_kebun', $request->luas_kebun);
        Session::flash('kecamatan', $request->kecamatan);
        Session::flash('kota', $request->kota);
        $request->validate([
            'username' => 'required|unique:users',
            'nama' => 'required',
            'kebun' => 'required',
            'luas_kebun' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'password' => 'required|min:6'
        ], [
            'username.required' => 'Usernama wajib diisi',
            'username.unique' => 'Username sudah pernah digunakan, silahkan gunakan username yang lain',
            'nama.required' => 'Nama Lengkap wajib diisi',
            'kebun.required' => 'Nama Kebun wajib diisi',
            'luas_kebun.required' => 'Luas Kebun wajib diisi',
            'kecamatan.required' => 'Kecamatan wajib diisi',
            'kota.required' => 'Kota wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        $data = User::create([
            'username' => $request['username'],
            'password' => Hash::make($request['password'])
        ]);

        Profile::create([
            'nama' => $request['nama'],
            'kebun' => $request['kebun'],
            'luas_kebun' => $request['luas_kebun'],
            'kecamatan' => $request['kecamatan'],
            'kota' => $request['kota'],
            'no_vak' => $request['no_vak'],
            'no_kontrak' => $request['no_kontrak'],
            'user_id' => $data->id,
        ]);
        return redirect('auth/login');
    }
}   
