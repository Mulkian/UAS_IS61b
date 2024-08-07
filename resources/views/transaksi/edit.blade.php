@extends('layouts.master')
@section('title','Form JenisMobil')
@section('heading','Form JenisMobil')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/transaksi/{{$tra->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" class="form-control" value="{{$tra->nama_pemesan}}" id="nama_pemesan" required>
                </div>

                <div class="mb-3">
                    <label for="tipe_mobil" class="form-label">Tipe Mobil</label>
                    <input type="text" name="tipe_mobil" class="form-control" value="{{$tra->tipe_mobil}}" id="tipe_mobil" required>
                </div>
                <div class="mb-3">
                    <label for="durasi_sewa" class="form-label">Durasi Sewa</label>
                    <input type="text" name="durasi_sewa" class="form-control" value="{{$tra->durasi_sewa}}" id="durasi_sewa" required>
                </div>

                <div class="mb-3">
                    <label for="harga_sewa" class="form-label">Harga Sewa</label>
                    <input type="text" name="harga_sewa" class="form-control" value="{{$tra->harga_sewa}}" id="harga_sewa" required>
                </div>

                <div class="mb-3">
                    <label for="ganti_rugi" class="form-label">Ganti Rugi</label>
                    <input type="text" name="ganti_rugi" class="form-control" value="{{$tra->ganti_rugi}}" id="ganti_rugi" required>
                </div>

                <div class="mb-3">
                    <label for="total_bayar" class="form-label">Total Bayar</label>
                    <input type="text" name="total_bayar" class="form-control" value="{{$tra->total_bayar}}" id="total_bayar" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" class="form-control" value="{{$tra->status}}" id="status" required>
                </div>


                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection
