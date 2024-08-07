<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesan;

class PemesanController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $pem = Pemesan::all();
        return view('pemesan.index',compact('nomor','pem'));
    }

    public function create()
    {
        return view('pemesan.form');
    }

    public function store(Request $request)
    {

        $pem = new Pemesan;

        $pem->nama_pemesan = $request->nama_pemesan;
        $pem->hp_pemesan= $request->hp_pemesan;
        $pem->alamat_pemesan = $request->alamat_pemesan;
        $pem->foto = $request->foto->getClientOriginalName();
        $pem->save();


        $request->foto->move('foto',$request->foto->getClientOriginalName());

        return redirect('/pemesan/');
    }
    public function edit(string $id)
    {

        $pem = Pemesan::find($id);
        return view('pemesan.edit',compact('pem'));
    }

    public function update(Request $request, string $id)
    {
        //
        $pem = Pemesan::find($id);

        // Update data lainnya
        $pem->nama_pemesan = $request->nama_pemesan;
        $pem->hp_pemesan = $request->hp_pemesan;
        $pem->alamat_pemesan = $request->alamat_pemesan;
        $pem->foto = $request->foto;
        $pem->save();


        $pem->foto->file('foto',$request->foto->getClientOriginalName());

        return redirect ('/pemesan/');
    }
    public function destroy(string $id)
    {

        $pem = Pemesan::find($id);
        $pem->delete();

        return redirect('/pemesan/');
    }

}
