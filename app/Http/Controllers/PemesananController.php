<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $peme = Pemesanan::all();
        return view('pemesanan.index',compact('nomor','peme'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemesanan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peme = new Pemesanan;
        $peme->id_pesanan = $request->id_pesanan;
        $peme->kd_mobil = $request->kd_mobil;
        $peme->no_pemesanan= $request->no_pemesanan;
        $peme->tgl_pesanan= $request->tgl_pesanan;


        $jen->save();

        return redirect('/pemesanan/');
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
        $peme = Pemesanan::find($id);
        return view('Pemesanan.edit',compact('peme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peme = Pemesanan::find($id);
        $peme->id_pesanan = $request->id_pesanan;
        $peme->kd_mobil = $request->kd_mobil;
        $peme->no_pemesanan= $request->no_pemesanan;
        $peme->tgl_pesanan= $request->tgl_pesanan;
        $peme->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peme = pemesanan::find($id);
        $peme->delete();

        return redirect('/pemesanan/');
    }
}
