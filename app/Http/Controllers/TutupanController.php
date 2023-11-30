<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Tutupan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TutupanController extends Controller
{
    public function index() {
        $profile = Profile::all();
        $user = User::where([
            ['role_id', '!=', 1]
        ])->get();
        $data = Tutupan::all();
        return view('tutupan.index', ['user' => $user, 'profile' => $profile, 'data' => $data]);
    }
    public function create() {
        $user = User::where([
            ['role_id', '!=', 1]
        ])->get();
        $profile = Profile::where('user_id','>','1')->get();
        return view('tutupan.create', ['user' => $user, 'profile' => $profile]);
    }
    public function store(Request $request) {
        $request->validate([
            'jumlah_tutupan' => 'required'
        ],[
            'jumlah_tutupan.required' => 'Jumlah Tutupan wajib diisi'
        ]);

        $tgl = Carbon::now()->toDateString();
        $tutupan = Tutupan::where('user_id', $request->user_id)
                    ->whereNotNull('jumlah_tutupan')
                    ->get(['jumlah_tutupan']);
        if ($tutupan->isEmpty()){
        $total = DB::table('pinjaman_logs')
                ->where('user_id', $request->user_id)
                ->where('status', 'approve')
                ->sum('jumlah_pinjaman');
        
        $total -= $request->jumlah_tutupan;
        $total = (string)$total;
        } else {
            $total = DB::table('tutupan')
            ->where('user_id', $request->user_id)
            ->first(['total'])->total;

            $tutup = DB::table('tutupan')
            ->where('user_id', $request->user_id)
            ->sum('jumlah_tutupan');

            $total -= $tutup;
            $total = (string)$total;
        
        }
        $data = [
            'tgl' => $tgl,
            'no_bukti' => $request->no_bukti,
            'jumlah_tutupan' => $request->jumlah_tutupan,
            'uraian' => $request->uraian,
            'user_id' => $request->user_id,
            'total' => $total
        ];
        Tutupan::create($data);
        return redirect()->to('tutupan')->with('success', 'Berhasil menambahkan data');
    }
    public function destroy($id) {
        Tutupan::where('id', $id)->delete();
        return redirect()->to('tutupan')->with('success', 'Berhasil menghapus data');
    }
}
