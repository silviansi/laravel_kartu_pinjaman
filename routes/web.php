<?php

use App\Http\Controllers\AjuanController;
use App\Http\Controllers\DepanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPinjamanController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarPinjamanUser;
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
    return view('depan/index');
});

Route::get('depan', [DepanController::class, 'index']);
Route::get('ajuan_pinjaman', [AjuanController::class, 'index']);

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
        //Route::get('ajuan_pinjaman', [AjuanController::class, 'create']);
        Route::post('ajuan_pinjaman', [AjuanController::class, 'store']);
    });

    Route::middleware('isLogin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard']);

        Route::resource('anggota', AnggotaController::class);
        Route::get('anggota/{id}', [AnggotaController::class, 'edit']); 
        Route::post('anggota/{id}', [AnggotaController::class, 'create']);
        Route::put('anggota/{id}', [AnggotaController::class, 'update']);

        Route::resource('pinjaman', PinjamanController::class);
        Route::get('pinjaman/{id}', [PinjamanController::class, 'show']);

        Route::get('pinjaman/{id}', [DataPinjamanController::class, 'store']);
        Route::post('pinjaman/{id}', [DataPinjamanController::class, 'create']);
    });
});