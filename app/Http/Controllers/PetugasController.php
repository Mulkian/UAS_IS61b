<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pet = Petugas::all();
        return view('petugas.index',compact('nomor','pet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pet = new Petugas;
        $pet->nama_petugas = $request->nama_petugas;
        $pet->alamat_petugas = $request->alamat_petugas;
        $pet->hp_petugas = $request->hp_petugas;
        $pet->save();

        return redirect('/petugas/');
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
        $pet = Petugas::find($id);
        return view('petugas.edit',compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pet = Petugas::find($id);
        $pet->delete();

        return redirect('/petugas/');
    }
}
