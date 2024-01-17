<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\JadwalPelajaranController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('siswa');
});


Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
Route::resource('mata-pelajaran', MataPelajaranController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('jadwal-pelajaran', JadwalPelajaranController::class);