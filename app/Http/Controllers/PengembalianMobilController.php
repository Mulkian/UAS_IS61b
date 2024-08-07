<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengembalianMobil;
use App\Models\Pemesan;
use App\Models\Pemesananpaket;


class PengembalianMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $bal = PengembalianMobil::all();
        $pem = Pemesan::all();
        $pak = Pemesananpaket::all();
        return view('pengembalianmobil.index',compact('nomor','bal','pem','pak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pak = PemesananPaket::where('paket_dipilih')->get();
        $bal = PengembalianMobil::all();
        $pem = Pemesan::all();
        $pak = PemesananPaket::all();
        return view('pengembalianmobil.form',compact('bal','pem','pak'));
    }

    /**$
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bal = new PengembalianMobil;

        $bal->pemesananpakets_id = $request->pemesananpakets_id;
        $bal->tgl_pengembalian= $request->tgl_pengembalian;

        $bal->ganti_rugi = $request->ganti_rugi;
        $bal->pembayaran = $request->pembayaran;
        $bal->status= $request->status;

        $bal->save();

        return redirect('/pengembalianmobil/');
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
        $bal = PengembalianMobil::find($id);
        $pem = Pemesan::all();
        $pak = Pemesananpaket::all();
        return view('pengembalianmobil.edit',compact('bal','pem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $bal = PengembalianMobil::find($id);
       
        $bal->ganti_rugi = $request->ganti_rugi;
        $bal->pembayaran = $request->pembayaran;
        $bal->status= $request->status;

        $bal->save();

        return redirect ('/pengembalianmobil/');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bal = PengembalianMobil::find($id);
        $bal->delete();

        return redirect('/pengembalianmobil/');
    }
}
