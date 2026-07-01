<?php

namespace App\Http\Controllers\Web;// Controller untuk mengelola data layanan

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananWebController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function create()
    {
        return view('layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'harga' => 'required|numeric'
        ]);

        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'harga' => $request->harga
        ]);

        return redirect('/layanan')
                ->with('success',
                    'Data layanan berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $layanan = Layanan::findOrFail($id);

        return view('layanan.show',
                    compact('layanan'));
    }

    public function edit(string $id)
    {
        $layanan = Layanan::findOrFail($id);

        return view('layanan.edit',
                    compact('layanan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'harga' => 'required|numeric'
        ]);

        $layanan = Layanan::findOrFail($id);

        $layanan->update([
            'nama_layanan' => $request->nama_layanan,
            'harga' => $request->harga
        ]);

        return redirect('/layanan')
                ->with('success',
                    'Data layanan berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return redirect('/layanan')
                ->with('success',
                    'Data layanan berhasil dihapus');
    }
}
