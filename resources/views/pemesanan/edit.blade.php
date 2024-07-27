@extends('layouts.master')
@section('title','Form Pemesanan')
@section('heading','Form Pemesanan')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/pemesanan/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">id Pesanan</label>
                    <input type="text" name="id_pesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">kd mobil</label>
                    <input type="text" name="kd_mobil" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">no Pemesanan</label>
                    <input type="text" name="no_pemesanan" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">tgl pesanan</label>
                    <input type="text" name="tgl_pesanan" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection
