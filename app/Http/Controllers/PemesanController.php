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

        $pem->save();

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
        $pem->nama_pemesan = $request->nama_pemesan;
        $pem->hp_pemesan = $request->hp_pemesan;
        $pem->alamat_pemesan = $request->alamat_pemesan;
        $pem->save();

        return redirect ('/pemesan/');
    }
    public function destroy(string $id)
    {
        //
        $pem = Pemesan::find($id);
        $pem->delete();

        return redirect('/pemesan/');
    }

}
