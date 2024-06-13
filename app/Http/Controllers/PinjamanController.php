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
        {
            $request->validate([
                'tanggal' => 'required',
                'no_bukti' => 'required',
                'jumlah_pinjaman' => 'required',
                'no_rek' => 'required',
                'uraian' => 'required'
            ]);

            $profile = Profile::where('user_id', $request->user_id)->first();

            // Cek jika profile masih kosong
            if (is_null($profile) || is_null($profile->no_kontrak) || is_null($profile->kebun)) {
                return redirect()->back()->with('error', 'Data profil tidak lengkap. Pastikan nomor kontrak, kebun, dll sudah terisi.');
            }
        
            $total = DB::table('pinjaman_logs')
                    ->where('user_id', $request->user_id)
                    ->sum('jumlah_pinjaman');
        
            $total += $request->jumlah_pinjaman;
        
            $data = [
                'tanggal' => $request->tanggal,
                'no_bukti' => $request->no_bukti,
                'jumlah_pinjaman' => $request->jumlah_pinjaman,
                'no_rek' => $request->no_rek,
                'uraian' => $request->uraian,
                'user_id' => $request->user_id,
                'total' => $total
            ];
        
            LogsPinjaman::create($data);
        
            return redirect()->to('pinjaman')->with('success', 'Berhasil menambahkan data');
        }
    }
    public function destroy($id) {
        LogsPinjaman::where('id', $id)->delete();
        return redirect()->to('pinjaman')->with('success', 'Berhasil menghapus data');
    }
}