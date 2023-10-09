<?php

namespace App\Http\Controllers;

use App\Models\PerhitunganHasil;
use App\Models\Pinjaman;
use App\Models\PinjamanLogs;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard() {
        $userCount = User::count();
        $pinjamanCount = Pinjaman::count();

        $perhitunganHasil = PerhitunganHasil::count();
        return view('dashboard/home', ['user_count' => $userCount, 'pinjaman_count' => $pinjamanCount, 'perhitungan_hasil' => $perhitunganHasil]);
    }
}
