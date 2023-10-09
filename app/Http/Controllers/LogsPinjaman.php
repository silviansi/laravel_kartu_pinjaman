<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman as ModelsLogsPinjaman;
use Illuminate\Http\Request;

class LogsPinjaman extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $rentlogs = ModelsLogsPinjaman::with('user', 'book')
            ->whereHas('pinjaman', function ($query) use ($keyword) {
                $query->where('title', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('username', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('pinjaman_user', ['rent_logs' => $rentlogs]);
    }
}