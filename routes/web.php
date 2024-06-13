<?php

use App\Http\Controllers\AjuanController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PabrikasiController;
use App\Http\Controllers\TutupanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('landingpage/index');
});

Route::get('landingpage', [LandingPageController::class, 'index']);

Route::middleware('guest')->group(function(){
Route::get('auth/login', [AuthController::class, 'index'])->name('login');
Route::post('auth/login', [AuthController::class, 'login']);
Route::get('auth/register', [AuthController::class, 'register']);
Route::post('auth/register', [AuthController::class, 'create']);
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::middleware('OnlyClient')->group(function () {
        Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
        Route::resource('ajuan_pinjaman', AjuanController::class);
        Route::post('ajuan_pinjaman', [AjuanController::class, 'store']);
    });

    Route::middleware('isLogin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota.index');
        Route::get('anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
        Route::post('anggota', [AnggotaController::class, 'store'])->name('anggota.store');
        Route::get('anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
        Route::put('anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
        Route::delete('anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
        Route::get('anggota/{user_id}', [AnggotaController::class, 'show'])->name('anggota.show');

        Route::get('pinjaman', [PinjamanController::class, 'index'])->name('pinjaman.index');
        Route::get('pinjaman/create', [PinjamanController::class, 'create'])->name('pinjaman.create');
        Route::post('pinjaman', [PinjamanController::class, 'store'])->name('pinjaman.store');
        Route::delete('pinjaman/{id}', [PinjamanController::class, 'destroy'])->name('pinjaman.destroy');

        Route::get('pabrikasi', [PabrikasiController::class, 'index'])->name('pabrikasi.index');
        Route::get('pabrikasi/create', [PabrikasiController::class, 'create'])->name('pabrikasi.create');
        Route::post('pabrikasi', [PabrikasiController::class, 'store'])->name('pabrikasi.store');
        Route::get('pabrikasi/{id}/edit', [PabrikasiController::class, 'edit'])->name('pabrikasi.edit');
        Route::put('pabrikasi/{id}', [PabrikasiController::class, 'update'])->name('pabrikasi.update');
        Route::delete('pabrikasi/{id}', [PabrikasiController::class, 'destroy'])->name('pabrikasi.destroy');

        Route::get('tutupan', [TutupanController::class, 'index'])->name('tutupan.index');
        Route::get('tutupan/create', [TutupanController::class, 'create'])->name('tutupan.create');
        Route::post('tutupan', [TutupanController::class, 'store'])->name('tutupan.store');
        Route::delete('tutupan/{id}', [TutupanController::class, 'destroy'])->name('tutupan.destroy');

        Route::resource('help', HelpController::class);
    });
});