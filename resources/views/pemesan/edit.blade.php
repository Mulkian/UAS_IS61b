@extends('layouts.master')
@section('title','Form Pemesan')
@section('heading','Form Pemesan')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/pemesan/{{$pem->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" class="form-control" value= "{{$pem->nama_pemesan}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">hp Pemesan</label>
                    <input type="text" name="hp_pemesan" class="form-control" value= "{{$pem->hp_pemesan}}" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Pemesan</label>
                    <input type="text" name="alamat_pemesan" class="form-control" value= "{{$pem->alamat_pemesan}}" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <input type="file" accept="image/*" name="foto" class="form-control" value= "{{$pem->foto}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection
