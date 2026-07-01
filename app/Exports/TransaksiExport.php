<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TransaksiExport implements
    FromCollection,
    WithHeadings,
    WithMapping
{
    public function collection()
    {
        return Transaksi::with([
                'pelanggan',
                'layanan'
            ])
            ->whereIn('status', ['Selesai', 'Diambil'])
            ->get();
    }

    // Judul kolom Excel
    public function headings(): array
    {
        return [
            'No',
            'Nama Pelanggan',
            'Layanan',
            'Berat (Kg)',
            'Total Harga',
            'Status',
            'Tanggal'
        ];
    }

    // Isi tiap baris
    public function map($transaksi): array
    {
        static $no = 1;

        return [
            $no++,
            $transaksi->pelanggan->nama,
            $transaksi->layanan->nama_layanan,
            $transaksi->berat_kg,
            'Rp ' . number_format($transaksi->total_harga,0,',','.'),
            $transaksi->status,
            $transaksi->created_at->format('d-m-Y')
        ];
    }
}
