<?php

namespace App\Http\Controllers;

use App\Models\Pabrikasi;
use App\Models\Profile;
use App\Models\Tutupan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index() {
        $profile = Profile::orderBy('id')->get();
        $user = User::where([
            ['role_id', '!=', 1],
        ])->get();
        return view('anggota.index')->with(['profile' => $profile, 'user' => $user]);
    }
    public function create() {
        return view('anggota.create');
    }
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'no_kontrak' => 'required',
            'no_vak' => 'required',
            'kebun' => 'required',
            'luas_kebun' => 'required',
            'kategori' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required'
        ]);

        // Periksa apakah user_id sudah ada di tabel profiles
        $existingProfile = Profile::where('user_id', $request->user_id)->first();

        if ($existingProfile) {
            return redirect()->back()->with('error', 'User sudah terdaftar sebagai mitra');
        }

        Profile::create([
            'user_id' => $request->user_id,
            'no_kontrak' => $request->no_kontrak,
            'no_vak' => $request->no_vak,
            'kebun' => $request->kebun,
            'luas_kebun' => $request->luas_kebun,
            'kategori' => $request->kategori,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota
        ]);
        return redirect()->to('anggota')->with('success', 'Berhasil menambahkan data');
    }
    public function edit($id)
    {
        $profile = Profile::with('user')->findOrFail($id);
        return view('anggota.edit', compact('profile'));
    }
    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'kebun' => 'required',
            'luas_kebun' => 'required',
            'no_vak' => 'required',
            'no_kontrak' => 'required',
            'kategori' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required'
        ]);
    
        $profile = Profile::findOrFail($id);
        $user = $profile->user;
        $user->update([
            'nama' => $request->input('nama')
        ]);
    
        $data = [
            'kebun' => $request->input('kebun'),
            'luas_kebun' => $request->input('luas_kebun'),
            'no_vak' => $request->input('no_vak'),
            'no_kontrak' => $request->input('no_kontrak'),
            'kategori' => $request->input('kategori'),
            'kecamatan' => $request->input('kecamatan'),
            'kota' => $request->input('kota')
        ];
    
        $profile->update($data);
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

        $tutupan = Tutupan::where('user_id', $id)->get();
        $r = DB::table('tutupan')->where('user_id', $id)->sum('jumlah_tutupan');

        if (!$pabrikasi) {
            return redirect()->back()->with('error', 'Data pabrikasi tidak ditemukan.');
        } else {
            return view('anggota/cetak_kartu', ['profile' => $profile, 'pabrikasi' => $pabrikasi, 'q' => $q, 'data' => $data, 'tutupan' => $tutupan, 'r' => $r]);
        }
    }
    public function destroy($id) {
        Profile::where('id', $id)->delete();
        return redirect()->to('anggota')->with('success', 'Berhasil menghapus data');
    }
}
