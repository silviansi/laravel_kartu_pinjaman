<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnggotaController extends Controller
{
    public function index() {
        $data = Profile::orderBy('id')->get();
        return view('anggota.index')->with('data', $data);
    }
    // public function store(Request $request) {
    //     Session::flash('usernama', $request->usernama);
    //     Session::flash('email', $request->email);
    //     $request->validate([
    //         'usernama' => 'required',
    //         'email' => 'required',
    //     ], [
    //         'usernama.required' => 'Username wajib diisi',
    //         'email.required' => 'Email wajib diisi',
    //     ]);
    //     $data = [
    //         'usernama' => $request->usernama,
    //         'email' => $request->email,
    //     ];
    //     Anggota::create($data);
    //     return redirect()->to('anggota')->with('success', 'Berhasil menambahkan data');
    // }
    // public function edit($id) {
    //     $data = Anggota::where('noVak', $id)->first();
    //     return view('anggota.update')->with('data', $data);
    // }
    // public function update(Request $request, $id) {
    //     $data = Anggota::find($id);
    //     $request->validate([
    //         'nama' => 'required',
    //         'kebun' => 'required',
    //         'luasBaku' => 'required',
    //         'noKontrak' => 'required',
    //         'kategori' => 'required',
    //         'periode' => 'required|numeric',
    //     ], [
    //         'nama.required' => 'Nama wajib diisi',
    //         'kebun.required' => 'Kebun wajib diisi',
    //         'luasBaku.required' => 'Luas Baku wajib diisi',
    //         'noKontrak.required' => 'No Kontrak wajib diisi',
    //         'kategori.required' => 'Kategori wajib diisi',
    //         'periode.required' => 'Periode wajib diisi',
    //         'periode.numeric' => 'Periode wajib diisi angka'
    //     ]);
    //     $data = [
    //         'nama' => $request->input('nama'),
    //         'kebun' => $request->input('kebun'),
    //         'luasBaku' => $request->input('luasBaku'),
    //         'noKontrak' => $request->input('noKontrak'),
    //         'kategori' => $request->input('kategori'),
    //         'periode' => $request->input('periode'),
    //     ];
    //     Anggota::where('noVak', $id)->update($data);
    //     return redirect()->to('anggota')->with('success', 'Berhasil melakukan update data');
    // }
    // public function destroy($id) {
    //     Anggota::where('noVak', $id)->delete();
    //     return redirect()->to('anggota')->with('success', 'Berhasil menghapus data');
    //  }
}
