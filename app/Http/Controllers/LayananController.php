<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return response()->json(Layanan::all(), 200);
    }

    public function store(Request $request)
    {
        $layanan = Layanan::create($request->all());

        return response()->json([
            'message' => 'Data layanan berhasil ditambahkan',
            'data' => $layanan
        ], 201);
    }

    public function show(string $id)
    {
        return response()->json(Layanan::findOrFail($id), 200);
    }

    public function update(Request $request, string $id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->update($request->all());

        return response()->json([
            'message' => 'Data layanan berhasil diupdate',
            'data' => $layanan
        ], 200);
    }

    public function destroy(string $id)
    {
        Layanan::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Data layanan berhasil dihapus'
        ], 200);
    }
}
