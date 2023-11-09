<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use App\Models\Pabrikasi;
use App\Models\Profile;
use App\Models\Tutupan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AnggotaController extends Controller
{
    public function index() {
        $data = Profile::orderBy('id')->get();
        return view('anggota.index')->with('data', $data);
    }
    public function edit($id) {
        $data = Profile::where('id', $id)->first();
        return view('anggota.update')->with('data', $data);
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
        $data = [
            'nama' => $request->input('nama'),
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
        ->where([['user_id', $id],
                ['status', '=', 'approve']])
        ->sum('jumlah_pinjaman');
        $data = LogsPinjaman::where([
            ['user_id', '=', $id],
            ['status', '=', 'approve']
            ])->get();

        $tutupan = Tutupan::where('user_id', $id)->get();
        $r = DB::table('tutupan')->where('user_id', $id)->sum('jumlah_tutupan');

        if($pabrikasi == null) {
            Session::flash('message', "Data Pabrikasi belum di input, Input data terlebih dahulu untuk mencetak kartu");
            return redirect('anggota');
        } else {
        return view('anggota/cetak_kartu', ['profile' => $profile, 'pabrikasi' => $pabrikasi, 'q' => $q, 'data' => $data, 'tutupan' => $tutupan, 'r' => $r]);
    }}
    public function destroy($id) {
        Profile::where('id', $id)->delete();
        return redirect()->to('anggota')->with('success', 'Berhasil menghapus data');
     }
}
