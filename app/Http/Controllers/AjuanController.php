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
}