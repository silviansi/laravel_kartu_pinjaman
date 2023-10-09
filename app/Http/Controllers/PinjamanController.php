<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Pinjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PinjamanController extends Controller
{
    public function index() {
        $data = Pinjaman::orderBy('id')->get();
        return view('pinjaman.index')->with('data', $data);
    }
    public function store(Request $request) {
        Session::flash('tanggal', $request->tanggal);
            Session::flash('noBukti', $request->noBukti);
            Session::flash('debet', $request->debet);
            Session::flash('kredit', $request->kredit);
            Session::flash('uraian', $request->uraian);
            $request->validate([
                'tanggal' => 'required',
                'noBukti' => 'required',
                'debet' => 'required',
                'kredit' => 'required',
                'uraian' => 'required'
            ], [
                'tanggal.required' => 'Tanggal wajib diisi',
                'noBukti.required' => 'No Bukti wajib diisi',
                'debet.required' => 'Debet wajib diisi',
                'kredit.required' => 'Kredit wajib diisi',
                'uraian.required' => 'Uraian wajib diisi'
            ]);
            $data = [
                'tanggal' => $request->tanggal,
                'noBukti' => $request->noBukti,
                'debet' => $request->debet,
                'kredit' => $request->kredit,
                'uraian' => $request->uraian
            ];
            $data = Pinjaman::create($data);
            return redirect()->to('pinjaman.show')->with('success', 'Berhasil menambahkan data');
    }
    public function show($id) {
        $data = Pinjaman::where('id', $id)->first();
        return view('pinjaman.show')->with('data', $data);
    }
    public function create() {
        $anggota = Anggota::all();
        return view('pinjaman.create', ['anggota_id' => $anggota]);
    }
}