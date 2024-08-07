<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $tra = Transaksi::all();
        return view('transaksi.index',compact('nomor','tra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tra = new Transaksi;

        $tra->nama_pemesan = $request->nama_pemesan;
        $tra->tipe_mobil = $request->tipe_mobil;
        $tra->durasi_sewa = $request->durasi_sewa;
        $tra->harga_sewa = $request->harga_sewa;
        $tra->ganti_rugi = $request->ganti_rugi;
        $tra->total_bayar = $request->total_bayar;
        $tra->status = $request->status;
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
        return view('transaksi.edit',compact('tra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tra = Transaksi::find($id);
        $tra->nama_pemesan = $request->nama_pemesan;
        $tra->tipe_mobil = $request->tipe_mobil;
        $tra->durasi_sewa = $request->durasi_sewa;
        $tra->harga_sewa = $request->harga_sewa;
        $tra->ganti_rugi = $request->ganti_rugi;
        $tra->total_bayar = $request->total_bayar;
        $tra->status = $request->status;

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
