@extends('layouts.master')
@section('title','Form Pemesanan ')
@section('heading','Form Pemesanan ')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="pemesananpaket/store/">
                @csrf
                <div class="mb-3">
                    <label for="kode_mobil" class="form-label">Nama Pemesan</label>
                    <select name="pemesans_id" class="form-control" id="">
                        <option value="">-Nama Pemesan-</option>
                        @foreach ($pem as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->nama_pemesan}}</option>
                        @endforeach

                    </select>
                </div>




                <div class="mb-3">
                    <label for="tgl_pesanan" class="form-label">Tanggal Pesanan</label>
                    <input type="date" name="tgl_pesanan" class="form-control" id="tgl_pesanan" required>
                </div>

                <div class="mb-3">
                    <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tgl_pengembalian" class="form-control" id="tgl_pengembalian" required>
                </div>


                <div class="mb-3">
                    <label for="paket_dipilih" class="form-label">Paket Dipilih</label>
                    <select name="paket_dipilih" class="form-control" id="paket_dipilih" required>
                        <option value="Paket Mingguan">Paket Harian</option>
                        <option value="Paket Mingguan">Paket Mingguan</option>
                        <option value="Paket Bulanan">Paket Bulanan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="mobil" class="form-label">Mobil</label>
                    <select name="jenis_mobils_id" class="form-control" id="">
                        <option value="">-Mobil Yang Dipilih-</option>
                        @foreach ($jen as $item)
                            <option value="{{$item->tipe_mobil}}">{{$item->kode}} - {{$item->tipe_mobil}}</option>
                        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
@endsection
