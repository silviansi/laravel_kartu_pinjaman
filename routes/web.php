<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PinjamanController;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
})->middleware('isLogin');

Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'create']);

Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware('isLogin');
Route::get('profile', [ProfileController::class, 'index']);

Route::resource('anggota', AnggotaController::class);
Route::get('anggota/{id}', [AnggotaController::class, 'edit']); 
Route::put('anggota/{id}', [AnggotaController::class, 'update']);

Route::resource('pinjaman', PinjamanController::class);
Route::get('pinjaman/{id}', [PinjamanController::class, 'show']);