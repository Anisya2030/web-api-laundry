<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Layanan;
use App\Models\Transaksi;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPelanggan = Pelanggan::count();

        $totalLayanan = Layanan::count();

        $totalTransaksiHariIni =
            Transaksi::whereDate('created_at', Carbon::today())
                      ->count();

        $pendapatanHariIni =
            Transaksi::whereDate('created_at', Carbon::today())
                      ->sum('total_harga');

        return view('dashboard', compact(
            'totalPelanggan',
            'totalLayanan',
            'totalTransaksiHariIni',
            'pendapatanHariIni'
        ));
    }
}
