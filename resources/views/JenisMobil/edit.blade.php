@extends('layouts.master')
@section('title','Form JenisMobil')
@section('heading','Form JenisMobil')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/jenismobil/{{$jen->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Type Mobil</label>
                    <input type="text" name="tipe_mobil" class="form-control" value="{{$jen->tipe_mobil}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tahun Mobil</label>
                    <input type="text" name="tahun_mobil" class="form-control" value="{{$jen->tahun_mobil}}" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Warna Mobil</label>
                    <input type="text" name="warna_mobil" class="form-control"  value="{{$jen->warna_mobil}}" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Plat Mobil</label>
                    <input type="text" name="plat_nomor" class="form-control"  value="{{$jen->plat_nomor}}" id="exampleInputPassword1">
                </div>


                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection
