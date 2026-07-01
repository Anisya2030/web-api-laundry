<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with(['pelanggan', 'layanan'])->get();

        return response()->json($transaksi, 200);
    }

    public function store(Request $request)
    {
        $transaksi = Transaksi::create($request->all());

        return response()->json([
            'message' => 'Data transaksi berhasil ditambahkan',
            'data' => $transaksi
        ], 201);
    }

    public function show(string $id)
    {
        $transaksi = Transaksi::with(['pelanggan', 'layanan'])
                        ->findOrFail($id);

        return response()->json($transaksi, 200);
    }

    public function update(Request $request, string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());

        return response()->json([
            'message' => 'Data transaksi berhasil diupdate',
            'data' => $transaksi
        ], 200);
    }

    public function destroy(string $id)
    {
        Transaksi::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Data transaksi berhasil dihapus'
        ], 200);
    }
}
