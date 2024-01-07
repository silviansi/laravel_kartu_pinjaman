<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        $iduser = Auth::id();
        $profile = Profile::where('user_id', $iduser)->first();
        return view('profile.index',['profile' => $profile]);
    }
    public function edit(){
        $iduser = Auth::id();
        $profile = Profile::where('user_id', $iduser)->first();
        return view('profile.edit',['profile' => $profile]);
    }

    public function update(request $request, $id){
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
        ],
        [
            'nama.required' => "Nama tidak boleh kosong",
            'username.required' => "Username tidak boleh kosong",
        ]);
        $iduser = Auth::id();
        $profile = Profile::where('user_id', $iduser)->first();

        $profile->user->nama = $request->nama;
        $profile->user->username = $request->username;

        $profile->user->update();
        return redirect()->to('anggota')->with('success', 'Berhasil melakukan update data');
    }
}
