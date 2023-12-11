<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AjuanController extends Controller
{
    public function index() {
        $user = Auth::user();
        $data = LogsPinjaman::where([
            ['user_id', '=', $user->id]
            ])->get();
            
        return view('ajuan_pinjaman.index', compact('user', 'data'));
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

        $total = DB::table('pinjaman_logs')
                ->where('user_id', Auth::id())
                ->sum('jumlah_pinjaman');
        $total += $request->jumlah_pinjaman;
        $total = (string)$total;
        $data = [
            'tanggal' => $request->tanggal,
            'no_bukti' => $request->no_bukti,
            'jumlah_pinjaman' => $request->jumlah_pinjaman,
            'uraian' => $request->uraian,
            'user_id' => Auth::id(),
            'total' => $total
        ];
        ($data);
        LogsPinjaman::create($data);
        return redirect()->to('ajuan_pinjaman');
    }                                                                  
}