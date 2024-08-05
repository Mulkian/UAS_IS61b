@extends('layouts.master')
@section('title', 'Edit Pemesanharian')
@section('heading', 'Edit Pemesanharian')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('pemesanharian.update', $har->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode_pesanan" class="form-label">Kode Pesanan</label>
                    <input type="text" name="kode_pesanan" class="form-control" id="kode_pesanan" value="{{ old('kode_pesanan', $har->kode_pesanan) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tgl_pesanan" class="form-label">Tanggal Pesanan</label>
                    <input type="date" name="tgl_pesanan" class="form-control" id="tgl_pesanan" value="{{ old('tgl_pesanan', $har->tgl_pesanan) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tgl_pengembalian" class="form-control" id="tgl_pengembalian" value="{{ old('tgl_pengembalian', $har->tgl_pengembalian) }}" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_mobil" class="form-label">Jumlah Mobil</label>
                    <input type="number" name="jumlah_mobil" class="form-control" id="jumlah_mobil" value="{{ old('jumlah_mobil', $har->jumlah_mobil) }}" required>
                </div>

                <div class="mb-3">
                    <label for="pembayaran" class="form-label">Pembayaran</label>
                    <input type="number" step="0.01" name="pembayaran" class="form-control" id="pembayaran" value="{{ old('pembayaran', $har->pembayaran) }}" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" class="form-control" id="status" value="{{ old('status', $har->status) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection
