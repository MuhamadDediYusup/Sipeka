<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'index'])->name('konsultasi.index');
    Route::get('/konsultasi/sesi', [App\Http\Controllers\KonsultasiController::class, 'sesi_konsultasi'])->name('konsultasi.sesi');
    Route::post('/konsultasi/result', [App\Http\Controllers\KonsultasiController::class, 'result'])->name('konsultasi.result');
});
