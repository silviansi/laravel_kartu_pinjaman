<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use App\Models\Pabrikasi;
use App\Models\Profile;
use App\Models\Tutupan;

class DashboardController extends Controller
{
    public function index() {
        $userCount = Profile::count();
        $LogsPinjaman = LogsPinjaman::count();
        $lapPabrikasi = Pabrikasi::count();
        $tutupan = Tutupan::count();
        $data = LogsPinjaman::orderBy('id')->get();
        return view('dashboard/home', ['user_count' => $userCount, 'pinjaman_count' => $LogsPinjaman, 'pabrikasi_count' => $lapPabrikasi, 'tutupan' => $tutupan, 'data' => $data]);
    }
}
