<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalianmobil;


class PengembalianMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $bal = PengembalianMobil::all();
        return view('pengembalianmobil.index',compact('nomor','bal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengembalianmobil.form');
    }

    /**$
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bal = new PengembalianMobil;

        $bal->id_pesanan = $request->id_pesanan;
        $bal->tgl_kembali= $request->tgl_kembali;

        $bal->ganti_rugi = $request->ganti_rugi;
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
        return view('pengembalianmobil.edit',compact('bal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $bal = PengembalianMobil::find($id);
        $bal->id_pesanan = $request->id_pesanan;
        $bal->tgl_kembali= $request->tgl_kembali;
        
        $bal->ganti_rugi = $request->ganti_rugi;
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
