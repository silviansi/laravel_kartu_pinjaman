<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamanController extends Controller
{
    public function index() {
        $profile = Profile::orderBy('id')->get();
        $user = User::where([
            ['role_id', '!=', 1],
        ])->get();
        $data = LogsPinjaman::orderBy('id')->get();
        return view('pinjaman.index')->with(['data' => $data, 'profile' => $profile, 'user' => $user]);
    }
    public function create() {
        $user = User::where([
            ['role_id', '!=', 1],
        ])->get();
        $profile = Profile::where('user_id','>','1')->get();
        return view('pinjaman.create', ['user'=>$user, 'profile'=>$profile]);
    }
    public function store(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'no_bukti' => 'required',
            'jumlah_pinjaman' => 'required',
            'no_rek' => 'required',
            'uraian' => 'required'
        ], [
            'tanggal.required' => 'Tanggal wajib diisi',
            'no_bukti.required' => 'No. Bukti wajib diisi',
            'jumlah_pinjaman.required' => 'Jumlah pinjaman wajib diisi',
            'no_rek' => 'No. Rekening wajib diisi',
            'uraian.required' => 'Uraian wajib diisi' 
        ]);

        $total = DB::table('pinjaman_logs')
                ->where('profile_id', $request->profile_id)
                ->sum('jumlah_pinjaman');
       // dd($total);
        $total += $request->jumlah_pinjaman;
        $total = (string)$total;
        $data = [
            'tanggal' => $request->tanggal,
            'no_bukti' => $request->no_bukti,
            'jumlah_pinjaman' => $request->jumlah_pinjaman,
            'no_rek' => $request->no_rek,
            'uraian' => $request->uraian,
            'profile_id' => $request->profile_id,
            'user_id' => $request->user_id,
            'total' => $total
        ];
        //dd($data);
        LogsPinjaman::create($data);
        return redirect()->to('pinjaman')->with('success', 'Berhasil menambahkan data');
        
    }
    public function destroy($id) {
        LogsPinjaman::where('id', $id)->delete();
        return redirect()->to('pinjaman')->with('success', 'Berhasil menghapus data');
    }
    public function getNama($id) {
        $profile = Profile::find($id);
        if ($profile && $profile->user) {
            return response()->json(['nama' => $profile->user->nama]);
        }

        return response()->json(['nama' => 'Data not found'], 404);
    }
}