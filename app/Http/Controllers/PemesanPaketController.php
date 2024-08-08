<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesananpaket;
use App\Models\Pemesan;
use App\Models\JenisMobil;
class PemesanPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pak = PemesananPaket::all();
        $pem = Pemesan::all();
        $jen = JenisMobil::all();

        return view('pemesananpaket.index',compact('nomor','pak','pem','jen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pak = PemesananPaket::all();
        $pem = Pemesan::all();
        $jen = JenisMobil::all();

        return view('pemesananpaket.form',compact('pak','pem','jen'));
    }

    /**$
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pak = new PemesananPaket;

        $pak->pemesans_id = $request->pemesans_id;
        $pak->tgl_pengembalian= $request->tgl_pengembalian;
        $pak->tgl_pesanan = $request->tgl_pesanan;
        $pak->paket_dipilih= $request->paket_dipilih;
        $pak->jenis_mobils_id= $request->jenis_mobils_id;
        $pak->harga = $request->harga;

        $pak->save();

        $jen=JenisMobil::where('tipe_mobil',$request->jenis_mobils_id)->delete();








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
        $pem = Pemesan::all();
        $jen = JenisMobil::all();
        return view('pemesananpaket.edit',compact('pak','pem','jen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $pak = PemesananPaket::find($id);
        $pak->pemesans_id = $request->nama_pemesan;
        $pak->tgl_pengembalian= $request->tgl_pengembalian;
        $pak->tgl_pesanan = $request->tgl_pesanan;

        $pak->paket_dipilih= $request->paket_dipilih;
        $pak->jenis_mobils_id= $request->tipe_mobil;

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
