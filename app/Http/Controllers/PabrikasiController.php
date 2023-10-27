<?php

namespace App\Http\Controllers;

use App\Models\Pabrikasi;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PabrikasiController extends Controller
{
    public function index() {
        $profile = Profile::all();
        $user = User::where([
            ['role_id', '!=', 1],
        ])->get();
        $data = Pabrikasi::all();
        return view('pabrikasi.index', ['user' => $user, 'data' => $data, 'profile' => $profile]);
    }
    public function create() {
        $user = User::where([
            ['role_id', '!=', 1],
        ])->get();
        $peminjam = Profile::where('user_id','>','1')->get();
        return view('pabrikasi.create', ['user'=>$user, 'peminjam'=>$peminjam]);
    }
    public function store(Request $request) {
        $count = Pabrikasi::where('user_id', $request->user_id)->count();
        if($count >= 1) {
            Session::flash('message', "Data Pabrikasi sudah ada");
            return redirect('pabrikasi');
        }
        else {
        $request->validate([
            'tebu_giling' => 'required',
            'rendemen_petani' => 'required',
            'gula_petani' => 'required',
            'tetes_petani' => 'required',
            'gula_masuk' => 'required'
        ], [
            'tebu_giling.required' => 'Tebu giling wajib diisi',
            'rendemen_petani.required' => 'Rendemen petani wajib diisi',
            'gula_petani.required' => 'Gula petani wajib diisi',
            'tetes_petani.required' => 'Tetes petani wajib diisi',
            'gula_masuk.required' => 'Gula masuk wajib diisi'
        ]);

        $data = $request->all();
        Pabrikasi::create($data);
        return redirect()->to('pabrikasi')->with('success', 'Berhasil menambahkan data');
    }}
    public function update(Request $request, $id) {
        $data = Pabrikasi::find($id);
        $request->validate([
            'tebu_giling' => 'required',
            'rendemen_petani' => 'required',
            'gula_petani' => 'required',
            'tetes_petani' => 'required',
            'gula_masuk' => 'required'
        ], [
            'tebu_giling.required' => 'Tebu Giling wajib diisi',
            'rendemen_petani.required' => 'Rendemen Petani wajib diisi',
            'gula_petani.required' => 'Gula Petani wajib diisi',
            'tetes_petani.required' => 'Tetes Petani wajib diisi',
            'gula_masuk.required' => 'Gula Masuk wajib diisi'
        ]);
        $data = [
            'tebu_giling' => $request->input('tebu_giling'),
            'rendemen_petani' => $request->input('rendemen_petani'),
            'gula_petani' => $request->input('gula_petani'),
            'tetes_petani' => $request->input('tetes_petani'),
            'gula_masuk' => $request->input('gula_masuk')
        ];
        Pabrikasi::where('id', $id)->update($data);
        return redirect()->to('pabrikasi')->with('success', 'Berhasil melakukan update data');
    }
    public function destroy($id) {
        Pabrikasi::where('id', $id)->delete();
        return redirect()->to('pabrikasi')->with('success', 'Berhasil menghapus data');
    }
}
