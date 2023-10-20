<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AjuanController extends Controller
{
    public function index() {
        $user = Auth::user();
        $data = LogsPinjaman::where([
            ['user_id', '=', $user->id],
            ['status', '=', 'approve']
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

        $data = [
            'tanggal' => $request->tanggal,
            'no_bukti' => $request->no_bukti,
            'jumlah_pinjaman' => $request->jumlah_pinjaman,
            'uraian' => $request->uraian,
            'user_id' => Auth::id()
        ];
        LogsPinjaman::create($data);
        return redirect()->to('ajuan_pinjaman');
    }
    public function show($id) {
        $iduser = Auth::id();
        $profile = Profile::where('user_id', $iduser)->first();

        $user = Auth::user();
        $data = LogsPinjaman::where([
            ['user_id', '=', $user->id],
            ['status', '=', 'approve']
            ])->get();

        $q = DB::table('pinjaman_logs')->where('user_id', '=', $user->id)->sum('jumlah_pinjaman');
        return view('ajuan_pinjaman.cetak_kartu',['profile' => $profile, 'data' => $data, 'q' => $q]);
    }
}
