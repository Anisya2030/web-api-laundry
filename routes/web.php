<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Web\PelangganWebController;
use App\Http\Controllers\Web\LayananWebController;
use App\Http\Controllers\Web\TransaksiWebController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard',
    [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/laporan',
    [LaporanController::class,'index']);

Route::get('/laporan/excel',
    [LaporanController::class,'export']);
    
Route::resource('pelanggan', PelangganWebController::class);
Route::resource('layanan', LayananWebController::class);
Route::resource('transaksi', TransaksiWebController::class);
