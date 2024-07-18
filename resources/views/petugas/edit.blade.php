@extends('layouts.master')
@section('title','Form Petugas')
@section('heading','Form Petugas')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/petugas/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                    <input type="text" name="nama_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">hp Petugas</label>
                    <input type="text" name="hp_petugas" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Petugas</label>
                    <input type="text" name="alamat_petugas" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection
