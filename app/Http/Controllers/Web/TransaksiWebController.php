<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class TransaksiWebController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with(['pelanggan', 'layanan'])->get();

        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $layanan = Layanan::all();

        return view('transaksi.create',
            compact('pelanggan', 'layanan'));
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'pelanggan_id' => 'required',
            'layanan_id'   => 'required',
            'berat_kg'     => 'required|numeric|min:1',
            'status'       => 'required'
        ]);

        // Ambil harga layanan
        $layanan = Layanan::findOrFail($request->layanan_id);

        // Hitung total otomatis
        $total = $request->berat_kg * $layanan->harga;

        // Simpan data
        Transaksi::create([
            'pelanggan_id' => $request->pelanggan_id,
            'layanan_id'   => $request->layanan_id,
            'berat_kg'     => $request->berat_kg,
            'total_harga'  => $total,
            'status'       => $request->status
        ]);

        return redirect('/transaksi')
                ->with('success',
                    'Transaksi berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $transaksi = Transaksi::with([
                            'pelanggan',
                            'layanan'
                        ])->findOrFail($id);

        return view('transaksi.show',
                    compact('transaksi'));
    }

    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $layanan = Layanan::all();

        return view('transaksi.edit',
            compact(
                'transaksi',
                'pelanggan',
                'layanan'
            ));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'layanan_id'   => 'required',
            'berat_kg'     => 'required|numeric|min:1',
            'status'       => 'required'
        ]);

        $transaksi = Transaksi::findOrFail($id);

        $layanan = Layanan::findOrFail($request->layanan_id);

        $total = $request->berat_kg * $layanan->harga;

        $transaksi->update([
            'pelanggan_id' => $request->pelanggan_id,
            'layanan_id'   => $request->layanan_id,
            'berat_kg'     => $request->berat_kg,
            'total_harga'  => $total,
            'status'       => $request->status
        ]);

        return redirect('/transaksi')
                ->with('success',
                    'Transaksi berhasil diupdate');
    }

    public function destroy(string $id)
    {
        Transaksi::findOrFail($id)->delete();

        return redirect('/transaksi')
                ->with('success',
                    'Transaksi berhasil dihapus');
    }
}
