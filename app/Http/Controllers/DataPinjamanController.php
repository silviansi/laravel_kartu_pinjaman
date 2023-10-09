<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\PinjamanDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataPinjamanController extends Controller
{
        public function index() {
            return view('ajuan_pinjaman/detail');
        }
        public function store(Request $request) {
            Session::flash('tanggal', $request->tanggal);
            Session::flash('no_bukti', $request->no_bukti);
            Session::flash('jumlah_pinjaman', $request->jumlah_pinjaman);
            Session::flash('uraian', $request->uraian);
            $request->validate([
                'tanggal' => 'required',
                'no_bukti' => 'required',
                'jumlah_pinjaman' => 'required',
                'uraian' => 'required'
            ], [
                'tanggal.required' => 'Tanggal wajib diisi',
                'no_bukti.required' => 'No Bukti wajib diisi',
                'jumlah_pinjaman.required' => 'Jumlah Pinjaman wajib diisi',
                'uraian.required' => 'Uraian wajib diisi'
            ]);
            $data = [
                'tanggal' => $request->tanggal,
                'no_bukti' => $request->no_bukti,
                'jumlah_pinjaman' => $request->jumlah_pinjaman,
                'uraian' => $request->uraian,
            ];
            $data = PinjamanDetail::create($data);
            return redirect()->to('pinjaman_user')->with('success', 'Berhasil menambahkan data');
    }
}
