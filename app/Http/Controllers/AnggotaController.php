<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnggotaController extends Controller
{
    public function index() {
        $data = Anggota::orderBy('noVak')->get();
        return view('anggota.index')->with('data', $data);
    }
    public function create() {
        return view('anggota.create');
    }
    public function store(Request $request) {
        Session::flash('nama', $request->nama);
        Session::flash('kebun', $request->kebun);
        Session::flash('luasBaku', $request->luasBaku);
        Session::flash('noKontrak', $request->noKontrak);
        Session::flash('kategori', $request->kategori);
        Session::flash('periode', $request->periode);
        $request->validate([
            'nama' => 'required',
            'kebun' => 'required',
            'noVak' => 'required|unique:anggota',
            'luasBaku' => 'required',
            'noKontrak' => 'required',
            'kategori' => 'required',
            'periode' => 'required|numeric',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'kebun.required' => 'Kebun wajib diisi',
            'noVak.required' => 'No Vak wajib diisi',
            'noVak.unique' => 'No Vak sudah pernah digunakan',
            'luasBaku.required' => 'Luas Baku wajib diisi',
            'noKontrak.required' => 'No Kontrak wajib diisi',
            'kategori.required' => 'Kategori wajib diisi',
            'periode.required' => 'Periode wajib diisi',
            'periode.numeric' => 'Periode wajib diisi angka'
        ]);
        $data = [
            'nama' => $request->nama,
            'kebun' => $request->kebun,
            'noVak' => $request->noVak,
            'luasBaku' => $request->luasBaku,
            'noKontrak' => $request->noKontrak,
            'kategori' => $request->kategori,
            'periode' => $request->periode,
        ];
        Anggota::create($data);
        return redirect()->to('anggota')->with('success', 'Berhasil menambahkan data');
    }
    public function edit($id) {
        $data = Anggota::where('noVak', $id)->first();
        return view('anggota.update')->with('data', $data);
    }
    public function update(Request $request, $id) {
        $data = Anggota::find($id);
        $request->validate([
            'nama' => 'required',
            'kebun' => 'required',
            'luasBaku' => 'required',
            'noKontrak' => 'required',
            'kategori' => 'required',
            'periode' => 'required|numeric',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'kebun.required' => 'Kebun wajib diisi',
            'luasBaku.required' => 'Luas Baku wajib diisi',
            'noKontrak.required' => 'No Kontrak wajib diisi',
            'kategori.required' => 'Kategori wajib diisi',
            'periode.required' => 'Periode wajib diisi',
            'periode.numeric' => 'Periode wajib diisi angka'
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'kebun' => $request->input('kebun'),
            'luasBaku' => $request->input('luasBaku'),
            'noKontrak' => $request->input('noKontrak'),
            'kategori' => $request->input('kategori'),
            'periode' => $request->input('periode'),
        ];
        Anggota::where('noVak', $id)->update($data);
        return redirect()->to('anggota')->with('success', 'Berhasil melakukan update data');
    }
    public function destroy($id) {
        Anggota::where('noVak', $id)->delete();
        return redirect()->to('anggota')->with('success', 'Berhasil menghapus data');
    }
}
