<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pemesananpaket;
use App\Models\Pemesan;
use App\Models\JenisMobil;
use App\Models\Pengembalianmobil;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $nomor = 1;
        $pem = Pemesan::all();
        $pak = PemesananPaket::all();
        $tra = Transaksi::all();
        $jen = JenisMobil::all();
        $bal = Pengembalianmobil::all();


        return view('transaksi.index',compact('nomor','pem','pak','tra','jen','bal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tra = Transaksi::all();
        $pem = Pemesan::all();
        $pak = Pemesananpaket::all();
        return view('transaksi.form',compact('tra','pem','pak'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tra = new Transaksi;

        $tra->pemesans_id = $request->pemesananpakets_id;
        $tra->tipe_mobil = $request->jenis_mobils_id;
        $tra->durasi_sewa = $request->paket_dipilih;
        $tra->harga_sewa = $request->harga;
        $tra->ganti_rugi = $request->ganti_rugi;
        $tra->total_bayar = $request->total_bayar;

        $tra->save();

        return redirect('/transaksi/');

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
        $tra = Transaksi::find($id);
        $pem = Pemesan::all();
        return view('transaksi.edit',compact('tra','pem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tra = Transaksi::find($id);
        $tra->pemesans_id = $request->nama_pemesan;
        $tra->tipe_mobil = $request->tipe_mobil;
        $tra->durasi_sewa = $request->durasi_sewa;
        $tra->harga_sewa = $request->harga_sewa;
        $tra->ganti_rugi = $request->ganti_rugi;
        $tra->total_bayar = $request->total_bayar;


        $tra->save();

        return redirect ('/transaksi/');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tra = Transaksi::find($id);
        $tra->delete();

        return redirect('/transaksi/');
    }
}
