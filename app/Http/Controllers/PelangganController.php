<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        return response()->json(Pelanggan::all(), 200);
    }

    public function store(Request $request)
    {
        $pelanggan = Pelanggan::create($request->all());

        return response()->json([
            'message' => 'Data pelanggan berhasil ditambahkan',
            'data' => $pelanggan
        ], 201);
    }

    public function show(string $id)
    {
        return response()->json(Pelanggan::findOrFail($id), 200);
    }

    public function update(Request $request, string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return response()->json([
            'message' => 'Data pelanggan berhasil diupdate',
            'data' => $pelanggan
        ], 200);
    }

    public function destroy(string $id)
    {
        Pelanggan::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Data pelanggan berhasil dihapus'
        ], 200);
    }
}
