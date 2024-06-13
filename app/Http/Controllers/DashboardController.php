<?php

namespace App\Http\Controllers;

use App\Models\LogsPinjaman;
use App\Models\Pabrikasi;
use App\Models\Profile;
use App\Models\Tutupan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $sevenDaysAgo = Carbon::now()->subDays(6)->startOfDay();
    $today = Carbon::now()->endOfDay();

    $pinjamanPerHari = DB::table('pinjaman_logs')
        ->select(DB::raw('DATE(tanggal) as tanggal, COUNT(*) as jumlah_transaksi'))
        ->whereBetween('tanggal', [$sevenDaysAgo, $today])
        ->groupBy('tanggal')
        ->orderBy('tanggal', 'asc')
        ->get();

    // Generate missing dates with zero transactions
    $dates = collect();
    for ($date = $sevenDaysAgo; $date <= $today; $date->addDay()) {
        $dates->put($date->format('Y-m-d'), 0);
    }

    // Merge the pinjaman data with the dates collection
    $pinjamanPerHari->each(function ($item) use ($dates) {
        $dates->put($item->tanggal, $item->jumlah_transaksi);
    });

    $user_count = Profile::count();
    $pinjaman_count = LogsPinjaman::count();
    $pabrikasi_count = Pabrikasi::count();
    $tutupan = Tutupan::count();

    return view('dashboard.home', compact('dates', 'user_count', 'pinjaman_count', 'pabrikasi_count', 'tutupan'));
    }
}
