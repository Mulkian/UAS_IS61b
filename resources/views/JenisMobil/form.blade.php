@extends('layouts.master')
@section('title','Form Jenis Mobil')
@section('heading','Form Jenis Mobil')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('jenismobil.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="tipe_mobil" class="form-label">Tipe Mobil</label>
                    <input type="text" name="tipe_mobil" class="form-control" id="tipe_mobil" required>
                </div>

                <div class="mb-3">
                    <label for="tahun_mobil" class="form-label">Tahun Mobil</label>
                    <input type="text" name="tahun_mobil" class="form-control" id="tahun_mobil" required>
                </div>

                <div class="mb-3">
                    <label for="warna_mobil" class="form-label">Warna Mobil</label>
                    <input type="text" name="warna_mobil" class="form-control" id="warna_mobil" required>
                </div>

                <div class="mb-3">
                    <label for="plat_nomor" class="form-label">Plat Nomor</label>
                    <input type="text" name="plat_nomor" class="form-control" id="plat_nomor" required>
                </div>

                <div class="mb-3">
                    <label for="plat_nomor" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" required>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
@endsection
