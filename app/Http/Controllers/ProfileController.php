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
            'kebun' => 'required',
            'luas_kebun' => 'required',
            'no_vak' => 'nullable',
            'no_kontrak' => 'nullable',
            'kategori' => 'nullable',
            'kecamatan' => 'required',
            'kota' => 'required',
        ],
        [
            'nama.required' => "Nama tidak boleh kosong",
            'kebun.required' => "Nama Kebun tidak boleh kosong",
            'luas_kebun.required' => "Luas Kebun tidak boleh kosong",
            'kecamatan.required' => "Kecamatan tidak boleh kosong",
            'kota.required' => "Kota Telepon tidak boleh kosong",
        ]);
        $iduser = Auth::id();
        $profile = Profile::where('user_id', $iduser)->first();

        if($request->has(['no_vak', 'no_kontrak', 'kategori'])){
            $profile->no_vak = $request->no_vak;
            $profile->no_kontrak = $request->no_kontrak;
            $profile->kategori = $request->kategori;
   
            $profile->update();
           }
        $profile->nama = $request->nama;
        $profile->kebun = $request->kebun;
        $profile->luas_kebun = $request->luas_kebun;
        $profile->kecamatan = $request->kecamatan;
        $profile->kota = $request->kota;

        $profile->update();
        return redirect()->to('anggota')->with('success', 'Berhasil melakukan update data');
    }
}
