<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use App\Models\Pabrikasi;
use App\Models\Profile;
use App\Models\Tutupan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AnggotaController extends Controller
{
    public function index() {
        $user = User::where([
            ['role_id', '!=', 1]
        ])->get();
        $data = Profile::orderBy('id')->get();
        return view('anggota.index')->with(['data' => $data, 'user' => $user]);
    }
    public function edit($id) {
        $data = Profile::where('id', $id)->first();
        return view('anggota.update')->with('data', $data);
    }
    public function store(Request $request) {
        $request->validate([
            'no_kontrak' => 'required',
            'kebun' => 'required',
            'luas_kebun' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required'
        ], [
            'no_kontrak' => 'No. Kontrak wajib diisi',
            'kebun' => 'Nama Kebun wajib diisi',
            'luas_kebun' => 'Luas Kebun wajib diisi',
            'kecamatan' => 'Kecamatan wajib diisi',
            'kota' => 'Kota wajib diisi'
        ]);

        $data = $request->all();
        Profile::create($data);
        return redirect()->to('anggota')->with('success', 'Berhasil menambahkan data');
    }
    public function update(Request $request, $id) {
        $data = Profile::find($id);
        $request->validate([
            'nama' => 'required',
            'kebun' => 'required',
            'luas_kebun' => 'required',
            'no_vak' => 'required',
            'no_kontrak' => 'required',
            'kategori' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'kebun.required' => 'Kebun wajib diisi',
            'luas_kebun.required' => 'Luas Kebun wajib diisi',
            'no_vak.required' => 'No. Vak wajib diisi',
            'no_kontrak.required' => 'No Kontrak wajib diisi',
            'kategori.required' => 'Kategori wajib diisi',
            'kecamatan.required' => 'Kecamatan wajib diisi',
            'kota.required' => 'Kota wajib diisi'
        ]);

        $user = User::find($id);
        $user = User::where('id',$id)->first();
        $user->nama = $request->input('nama');
        $user->save();
        $data = [
            'kebun' => $request->input('kebun'),
            'luas_kebun' => $request->input('luas_kebun'),
            'no_vak' => $request->input('no_vak'),
            'no_kontrak' => $request->input('no_kontrak'),
            'kategori' => $request->input('kategori'),
            'kecamatan' => $request->input('kecamatan'),
            'kota' => $request->input('kota')
        ];
        Profile::where('id', $id)->update($data);
        return redirect()->to('anggota')->with('success', 'Berhasil melakukan update data');
    }
    public function show($id) {
        $profile = Profile::where('user_id', $id)->first();
        $pabrikasi = Pabrikasi::where('user_id', $id)->first();
        $q = DB::table('pinjaman_logs')
        ->where('user_id', $id)
        ->sum('jumlah_pinjaman');
        $data = DB::table('pinjaman_logs')
        ->where('user_id', $id)
        ->get();
        //$data = LogsPinjaman::where('profile_id', '=', 'profile_id')->get();

        $tutupan = Tutupan::where('user_id', $id)->get();
        $r = DB::table('tutupan')->where('user_id', $id)->sum('jumlah_tutupan');

        if($pabrikasi == null) {
            Session::flash('message', "Data Laporan Harian belum di input, Input data terlebih dahulu untuk mencetak kartu");
            return redirect('anggota');
        } else {
            //dd($data);
        return view('anggota/cetak_kartu', ['profile' => $profile, 'pabrikasi' => $pabrikasi, 'q' => $q, 'data' => $data, 'tutupan' => $tutupan, 'r' => $r]);
    }}
    public function destroy($id) {
        Profile::where('id', $id)->delete();
        return redirect()->to('anggota')->with('success', 'Berhasil menghapus data');
     }
}
