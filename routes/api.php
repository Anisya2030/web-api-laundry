<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TransaksiController;

Route::apiResource('pelanggan', PelangganController::class);
Route::apiResource('layanan', LayananController::class);
Route::apiResource('transaksi', TransaksiController::class);
