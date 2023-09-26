<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use Illuminate\Http\Request;

class DataPinjamanController extends Controller
{
        public function store(Request $request) {
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
            'uraian' => $request->uraian,
        ];
        $data = Pinjaman::create($data);
        return redirect()->to('pinjaman.show')->with('success', 'Berhasil menambahkan data');
    }
}
