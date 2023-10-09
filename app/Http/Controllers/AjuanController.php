<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use Illuminate\Http\Request;

class AjuanController extends Controller
{
    public function index() {
        $data = Pinjaman::orderBy('id')->get();
        return view('ajuan_pinjaman.index')->with('data', $data);
    }
    public function create() {
        return view('ajuan_pinjaman.create');
    }
    public function store(Request $request) {
        $request->validate([
            'tanggal' => 'required',
            'no_bukti' => 'required',
            'jumlah_pinjaman' => 'required',
            'uraian' => 'required'
        ], [
            'tanggal.required' => 'Tanggal wajib diisi',
            'no_bukti.required' => 'No. Bukti wajib diisi',
            'jumlah_pinjaman.required' => 'Jumlah pinjaman wajib diisi',
            'uraian.required' => 'Uraian wajib diisi' 
        ]);

        $data = [
            'tanggal' => $request->tanggal,
            'no_bukti' => $request->no_bukti,
            'jumlah_pinjaman' => $request->jumlah_pinjaman,
            'uraian' => $request->uraian,
        ];
        Pinjaman::create($data);
        return view('ajuan_pinjaman/index')->with('success', 'Berhasil menambahkan data');
    }
}
