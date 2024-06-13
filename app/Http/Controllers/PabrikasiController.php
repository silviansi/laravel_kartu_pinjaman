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
        $user = User::where([
            ['role_id', '!=', 1],
        ])->get();
        $data = Pabrikasi::all();
        return view('pabrikasi.index', ['user' => $user, 'data' => $data]);
    }
    public function create() {
        return view('pabrikasi.create');
    }
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'tebu_giling' => 'required',
            'rendemen_petani' => 'required',
            'gula_petani' => 'required',
            'tetes_petani' => 'required',
            'tebu_masuk' => 'required'
        ]);

        // Periksa apakah user_id sudah ada di tabel pabrikasi
        $existingPabrikasi = Pabrikasi::where('user_id', $request->user_id)->first();

        if ($existingPabrikasi) {
            return redirect()->back()->with('error', 'Data pabrikasi untuk user ini sudah ada.');
        }

        $data = [
            'tebu_giling' => $request->tebu_giling,
            'rendemen_petani' => $request->rendemen_petani,
            'gula_petani' => $request->gula_petani,
            'tetes_petani' => $request->tetes_petani,
            'tebu_masuk' => $request->tebu_masuk,
            'user_id' => $request->user_id
        ];

        Pabrikasi::create($data);
        return redirect()->to('pabrikasi')->with('success', 'Berhasil menambahkan data');
    }
    public function edit($id) {
        $data = Pabrikasi::find($id);
        return view('pabrikasi.edit', ['data' => $data]);
    }
    public function update(Request $request, $id) {
        $data = Pabrikasi::find($id);
        $request->validate([
            'tebu_giling' => 'required',
            'rendemen_petani' => 'required',
            'gula_petani' => 'required',
            'tetes_petani' => 'required',
            'tebu_masuk' => 'required'
        ]);
        $data = [
            'tebu_giling' => $request->input('tebu_giling'),
            'rendemen_petani' => $request->input('rendemen_petani'),
            'gula_petani' => $request->input('gula_petani'),
            'tetes_petani' => $request->input('tetes_petani'),
            'tebu_masuk' => $request->input('tebu_masuk')
        ];
        Pabrikasi::where('id', $id)->update($data);
        return redirect()->to('pabrikasi')->with('success', 'Berhasil melakukan update data');
    }
    public function destroy($id) {
        Pabrikasi::where('id', $id)->delete();
        return redirect()->to('pabrikasi')->with('success', 'Berhasil menghapus data');
    }
}