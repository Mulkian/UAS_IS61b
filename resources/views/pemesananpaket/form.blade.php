@extends('layouts.master')
@section('title','Form Pemesanan Paket')
@section('heading','Form Pemesanan Paket')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="pemesananpaket/store/">
                @csrf
                <div class="mb-3">
                    <label for="kode_mobil" class="form-label">kode Pesanan</label>
                    <input type="text" name="kode_pesanan" class="form-control" id="kode_pesanan" required>
                </div>

                <div class="mb-3">
                    <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tgl_pengembalian" class="form-control" id="tgl_pengembalian" required>
                </div>

                <div class="mb-3">
                    <label for="tgl_pesanan" class="form-label">Tanggal Pesanan</label>
                    <input type="date" name="tgl_pesanan" class="form-control" id="tgl_pesanan" required>
                </div>


                <div class="mb-3">
                    <label for="paket_dipilih" class="form-label">Paket Dipilih</label>
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
