<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesananpaket;

class PemesanPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pak = PemesananPaket::all();
        return view('pemesananpaket.index',compact('nomor','pak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemesananpaket.form');
    }

    /**$
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pak = new PemesananPaket;

        $pak->kode_pesanan = $request->kode_pesanan;
        $pak->tgl_pengembalian= $request->tgl_pengembalian;
        $pak->tgl_pesanan = $request->tgl_pesanan;
        $pak->paket_dipilih= $request->paket_dipilih;

        $pak->save();

        return redirect('/pemesananpaket/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pak = PemesananPaket::find($id);
        return view('pemesananpaket.edit',compact('pak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $pak = PemesananPaket::find($id);
        $pak->kode_pesanan = $request->kode_pesanan;
        $pak->tgl_pengembalian= $request->tgl_pengembalian;
        $pak->tgl_pesanan = $request->tgl_pesanan;

        $pak->paket_dipilih= $request->paket_dipilih;;

        $pak->save();

        return redirect ('/pemesananpaket/');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pak = PemesananPaket::find($id);
        $pak->delete();

        return redirect('/pemesananpaket/');
    }
}
