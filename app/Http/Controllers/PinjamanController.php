<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Pinjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PinjamanController extends Controller
{
    public function index() {
        $data = Anggota::orderBy('noVak')->get();
        return view('pinjaman.index')->with('data', $data);
    }
    // public function store(Request $request) {
    //     $request->validate([
    //         'tanggal' => 'required',
    //         'noBukti' => 'required',
    //         'debet' => 'required',
    //         'kredit' => 'required',
    //         'uraian' => 'required'
    //     ], [
    //         'tanggal.required' => 'Tanggal wajib diisi',
    //         'noBukti.required' => 'No Bukti wajib diisi',
    //         'debet.required' => 'Debet wajib diisi',
    //         'kredit.required' => 'Kredit wajib diisi',
    //         'uraian.required' => 'Uraian wajib diisi'
    //     ]);
    //     $data = [
    //         'tanggal' => $request->tanggal,
    //         'noBukti' => $request->noBukti,
    //         'debet' => $request->debet,
    //         'kredit' => $request->kredit,
    //         'uraian' => $request->uraian,
    //     ];
    //     $data = Anggota::where('noVak')->get();
    //     return view('pinjaman.index')->with('data', $data);
    // }
    public function show($id) {
        $data = Anggota::where('noVak', $id)->first();
        return view('pinjaman.show')->with('data', $data);
    }
    // public function create() {
    //     return view('pinjaman.create');
    // }
}