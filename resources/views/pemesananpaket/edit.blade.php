@extends('layouts.master')
@section('title','Form Pemesanan')
@section('heading','Form Pemesanan')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/pemesananpaket/{{$pak->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                    <select name="nama_pemesan" class="form-control" id="">
                        <option value="">-Nama Pemesan-</option>
                        @foreach ($pem as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->nama_pemesan}}</option>
                        @endforeach

                    </select>
                </div>



                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Pesanan</label>
                    <input type="text" name="tgl_pesanan" class="form-control"  value="{{$pak->tgl_pesanan}}" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
                    <input type="text" name="tgl_pengembalian" class="form-control" value="{{$pak->tgl_pengembalian}}" id="exampleInputPassword1">
                </div>



                <div class="mb-3">
                    <label for="paket_dipilih" class="form-label">Paket Diambil</label>
                    <select name="paket_dipilih" class="form-control" id="paket_dipilih" required>
                        <option value="Paket Mingguan">Paket Mingguan</option>
                        <option value="Paket Bulanan">Paket Bulanan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tipe_mobil" class="form-label">Mobil</label>
                    <select name="tipe_mobil" class="form-control" id="">
                        <option value="">-Mobil-</option>
                        @foreach ($jen as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->tipe_mobil}}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection
