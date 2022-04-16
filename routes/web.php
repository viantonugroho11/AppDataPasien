<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home', function () {
    return redirect()->route('dashboard');
});
// Route::middleware(['auth'])->group(function(){
Route::resource('/pasien', App\Http\Controllers\PasienController::class);
Route::get('/pasien/cetak/{id}', [App\Http\Controllers\PasienController::class,'print'])->name('cetakpasien');
Route::get('/caripasien/', [App\Http\Controllers\PasienController::class,'cari'])->name('pasien.cari');
Route::get('/dashboard', [App\Http\Controllers\IndexController::class,'index'])->name('dashboard');
Route::get('/cek/cetak/{id}', [App\Http\Controllers\KeluhanController::class,'print'])->name('cetakkeluhan');
Route::resource('/cek', App\Http\Controllers\KeluhanController::class);
Route::get('/caricek/', [App\Http\Controllers\KeluhanController::class,'cari'])->name('cekcari');
Route::get('/laporan', [App\Http\Controllers\LaporanController::class,'index'])->name('laporan');
Route::Post('/laporan/tanggal', [App\Http\Controllers\LaporanController::class,'caritanggal'])->name('laporan.tanggal');
Route::Post('/laporan/bulan', [App\Http\Controllers\LaporanController::class,'caribulan'])->name('laporan.bulan');
Route::Post('/laporan/tahun', [App\Http\Controllers\LaporanController::class,'caritahun'])->name('laporan.tahun');
Route::resource('/tindakan', App\Http\Controllers\TindakanController::class);
Route::resource('/antrian', App\Http\Controllers\AntrianController::class);
Route::resource('/swab', App\Http\Controllers\SwabController::class);
Route::Get('/swabcari/', [App\Http\Controllers\PasienController::class,'cari'])->name('swab.cari');

Route::get('/tindakan/cetak/{id}', [App\Http\Controllers\TindakanController::class,'print'])->name('cetaktindakan');
Route::get('/caritindakan/', [App\Http\Controllers\TindakanController::class,'cari'])->name('tindakancari');
Route::get('/antrian/cetak/{id}', [App\Http\Controllers\AntrianController::class,'print'])->name('cetakantrian');
Route::get('/cariantrian/', [App\Http\Controllers\AntrianController::class,'cari'])->name('antriancari');
// });
// Auth::routes();
route::get('/',function(){
    //halaman logout
    return redirect()->route('dashboard');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
