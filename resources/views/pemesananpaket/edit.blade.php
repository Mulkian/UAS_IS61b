@extends('layouts.master')
@section('title','Form Pemesananpaket')
@section('heading','Form Pemesananpaket')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/pemesananpaket/{{$pak->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Pesanan</label>
                    <input type="text" name="kode_pesanan" class="form-control" value="{{$pak->kode_pesanan}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
                    <input type="text" name="tgl_pengembalian" class="form-control" value="{{$pak->tgl_pengembalian}}" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Pesanan</label>
                    <input type="text" name="tgl_pesanan" class="form-control"  value="{{$pak->tgl_pesanan}}" id="exampleInputPassword1">
                </div>



                <div class="mb-3">
                    <label for="paket_dipilih" class="form-label">Paket Diambil</label>
                    <select name="paket_dipilih" class="form-control" id="paket_dipilih" required>
                        <option value="Paket Mingguan">Paket Mingguan</option>
                        <option value="Paket Bulanan">Paket Bulanan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection
