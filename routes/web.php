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
        Route::resource('profile', ProfileController::class)->only('index','update','edit');
        Route::resource('ajuan_pinjaman', AjuanController::class);
        Route::post('ajuan_pinjaman', [AjuanController::class, 'store']);
    });

    Route::middleware('isLogin')->group(function () {
        Route::resource('dashboard', DashboardController::class);

        Route::resource('anggota', AnggotaController::class);
        Route::put('anggota/{id}', [AnggotaController::class, 'update']);
        Route::get('anggota/{user_id}', [AnggotaController::class, 'show']);

        Route::resource('pinjaman', PinjamanController::class);
        Route::get('pinjaman/{id}', [PinjamanController::class, 'store']);
        Route::get('get-nama/{id}', [PinjamanController::class, 'getNama']);

        Route::resource('pabrikasi', PabrikasiController::class);
        Route::post('pabrikasi', [PabrikasiController::class, 'store']);

        Route::resource('tutupan', TutupanController::class);
        Route::post('tutupan', [TutupanController::class, 'store']);
        Route::get('get-nama/{id}', [TutupanController::class, 'getNama']);

        Route::resource('help', HelpController::class);
    });
});