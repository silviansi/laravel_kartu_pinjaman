<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Tutupan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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

        $request['tgl'] = Carbon::now()->toDateString();
        $data = $request->all();
        Tutupan::create($data);
        return redirect()->to('tutupan')->with('success', 'Berhasil menambahkan data');
    }
    public function update(Request $request, $id) {
        $data = Tutupan::find($id);
        $request->validate([
            'tgl' => 'required',
            'no_bukti' => 'required',
            'jumlah_tutupan' => 'required',
            'uraian' => 'required'
        ], [
            'tgl.required' => 'Tanggal wajib diisi',
            'no_bukti.required' => 'No Bukti wajib diisi',
            'jumlah_tutupan.required' => 'Jumlah Tutupan wajib diisi',
            'uraian.required' => 'Uraian wajib diisi'
        ]);
        $data = [
            'tgl' => $request->input('tgl'),
            'no_bukti' => $request->input('no_bukti'),
            'jumlah_tutupan' => $request->input('jumlah_tutupan'),
            'uraian' => $request->input('uraian')
        ];
        Tutupan::where('id', $id)->update($data);
        return redirect()->to('tutupan')->with('success', 'Berhasil melakukan update data');
    }
    public function destroy($id) {
        Tutupan::where('id', $id)->delete();
        return redirect()->to('tutupan')->with('success', 'Berhasil menghapus data');
    }
}
