<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index() {
        $profile = Profile::all();
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
            'uraian' => 'required'
        ], [
            'tanggal.required' => 'Tanggal wajib diisi',
            'no_bukti.required' => 'No. Bukti wajib diisi',
            'jumlah_pinjaman.required' => 'Jumlah pinjaman wajib diisi',
            'uraian.required' => 'Uraian wajib diisi' 
        ]);
        
        $data = $request->all();
        LogsPinjaman::create($data);
        return redirect()->to('pinjaman')->with('success', 'Berhasil menambahkan data');
        
    }
    public function edit($id) {
        $data = LogsPinjaman::where('id', $id)->first();
        return view('pinjaman.edit')->with('data', $data);
    }
    public function update(Request $request, $id) {
        $data = LogsPinjaman::find($id);
        $request->validate([
            'tanggal' => 'required',
            'no_bukti' => 'required',
            'jumlah_pinjaman' => 'required',
            'uraian' => 'required'
        ], [
            'tanggal.required' => 'Tanggal wajib diisi',
            'no_bukti.required' => 'No. Bukti wajib diisi',
            'jumlah_pinjaman.required' => 'Jumlah Pinjaman wajib diisi',
            'uraian.required' => 'Uraian wajib diisi'
        ]);
        $data = [
            'tanggal' => $request->input('tanggal'),
            'no_bukti' => $request->input('no_bukti'),
            'jumlah_pinjaman' => $request->input('jumlah_pinjaman'),
            'uraian' => $request->input('uraian')
        ];
        LogsPinjaman::where('id', $id)->update($data);
        return redirect()->to('pinjaman')->with('success', 'Berhasil melakukan update data');
    }
    public function approve($id) {
        $pinjaman = LogsPinjaman::where('id', $id)->first();
        $pinjaman->status = 'approve';
        $pinjaman->save();

        return redirect()->to('pinjaman')->with('success', 'Pinjaman disetujui');
    }
    public function destroy($id) {
        LogsPinjaman::where('id', $id)->delete();
        return redirect()->to('pinjaman')->with('success', 'Berhasil menghapus data');
    }
}