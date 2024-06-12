<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index() {
        $user = auth()->user();
        return view('profile.index', compact('user'));
    }
    public function edit($id){
        $user = User::find($id); 
        return view('profile.edit', ['user' => $user]); 
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|unique:users,email,'. $id,
        ]);

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->save();

        return redirect()->to('profile')->with('success', 'Berhasil memperbarui data');
    }
}
