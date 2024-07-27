<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisMobil;
class JenisMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $jen = JenisMobil::all();
        return view('jenismobil.index',compact('nomor','jen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenismobil.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jen = new JenisMobil;

        $jen->tipe_mobil = $request->tipe_mobil;
        $jen->tahun_mobil = $request->tahun_mobil;
        $jen->warna_mobil = $request->warna_mobil;
        $jen->plat_nomor = $request->plat_nomor;


        $jen->save();

        return redirect('/jenismobil/');
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
        $jen = JenisMobil::find($id);
        return view('jenismobil.edit',compact('jen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jen = JenisMobil::find($id);
        $jen->tipe_mobil = $request->tipe_mobil;
        $jen->tahun_mobil= $request->tahun_mobil;
        $jen->warna_mobil = $request->warna_mobil;
        $jen->plat_nomor= $request->plat_nomor;

        $jen->save();

        return redirect ('/jenismobil/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jen = JenisMobil::find($id);
        $jen->delete();

        return redirect('/jenismobil/');
    }
}
