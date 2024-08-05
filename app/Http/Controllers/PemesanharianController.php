<?php

namespace App\Http\Controllers;

use App\Models\Pemesanharian;
use Illuminate\Http\Request;

class PemesanharianController extends Controller
{
    public function index()
    {
        $har = Pemesanharian::all();
        $nomor = 1;
        return view('pemesanharian.index', compact('har', 'nomor'));
    }

    public function create()
    {
        return view('pemesanharian.create');
    }

    public function show($id)
{
    $item = PemesanHarian::findOrFail($id);
    return view('pemesanharian.show', compact('item'));
}
    public function store(Request $request)
    {
        $request->validate([
            'kode_pesanan' => 'required|string|max:255',
            'tgl_pesanan' => 'required|date',
            'tgl_pengembalian' => 'required|date',
            'jumlah_mobil' => 'required|integer',
            'pembayaran' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        Pemesanharian::create($request->all());
        return redirect()->route('pemesanharian.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $har = Pemesanharian::findOrFail($id);
        return view('pemesanharian.edit', compact('har'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_pesanan' => 'required|string|max:255',
            'tgl_pesanan' => 'required|date',
            'tgl_pengembalian' => 'required|date',
            'jumlah_mobil' => 'required|integer',
            'pembayaran' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        $har = Pemesanharian::findOrFail($id);
        $har->update($request->all());
        return redirect()->route('pemesanharian.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $har = Pemesanharian::findOrFail($id);
        $har->delete();
        return redirect()->route('pemesanharian.index')->with('success', 'Data berhasil dihapus.');
    }
}
