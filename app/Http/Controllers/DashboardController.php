<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard() {
        $userCount = User::count();
        $LogsPinjaman = LogsPinjaman::count();
        return view('dashboard/home', ['user_count' => $userCount, 'pinjaman_count' => $LogsPinjaman]);
    }
}
