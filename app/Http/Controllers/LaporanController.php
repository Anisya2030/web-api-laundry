<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransaksiExport;

class LaporanController extends Controller
{
    public function index()
    {
        // Pendapatan hari ini
        $hariIni = Transaksi::whereIn('status', ['Selesai', 'Diambil'])
                        ->whereDate(
                            'created_at',
                            Carbon::today()
                        )
                        ->sum('total_harga');

        // Pendapatan minggu ini
        $mingguIni = Transaksi::whereIn('status', ['Selesai', 'Diambil'])
                            ->whereBetween(
                                'created_at',
                                [
                                    Carbon::now()->startOfWeek(),
                                    Carbon::now()->endOfWeek()
                                ]
                            )
                            ->sum('total_harga');

        // Pendapatan bulan ini
        $bulanIni = Transaksi::whereIn('status', ['Selesai', 'Diambil'])
                        ->whereMonth(
                            'created_at',
                            Carbon::now()->month
                        )
                        ->sum('total_harga');

        // Data transaksi untuk laporan
        $transaksi = Transaksi::with([
                            'pelanggan',
                            'layanan'
                        ])
                        ->whereIn('status', ['Selesai', 'Diambil'])
                        ->latest()
                        ->get();

        return view(
            'laporan.index',
            compact(
                'hariIni',
                'mingguIni',
                'bulanIni',
                'transaksi'
            )
        );
    }

    public function export()
    {
        return Excel::download(
            new TransaksiExport,
            'laporan_laundry.xlsx'
        );
    }
}
