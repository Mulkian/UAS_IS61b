@extends('layouts.master')
@section('title', 'Form Pemesanharian')
@section('heading', 'Form Pemesanharian')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST"
                  action="{{ isset($har) ? route('pemesanharian.update', $har->id) : route('pemesanharian.store') }}">
                @csrf
                @if(isset($har))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="kode_pesanan" class="form-label">Kode Pesanan</label>
                    <input type="text" name="kode_pesanan" class="form-control" id="kode_pesanan"
                           value="{{ old('kode_pesanan', isset($har) ? $har->kode_pesanan : '') }}" required>
                    @error('kode_pesanan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tgl_pesanan" class="form-label">Tanggal Pesanan</label>
                    <input type="date" name="tgl_pesanan" class="form-control" id="tgl_pesanan"
                           value="{{ old('tgl_pesanan', isset($har) ? $har->tgl_pesanan : '') }}" required>
                    @error('tgl_pesanan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tgl_pengembalian" class="form-control" id="tgl_pengembalian"
                           value="{{ old('tgl_pengembalian', isset($har) ? $har->tgl_pengembalian : '') }}" required>
                    @error('tgl_pengembalian')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_mobil" class="form-label">Jumlah Mobil</label>
                    <input type="number" name="jumlah_mobil" class="form-control" id="jumlah_mobil"
                           value="{{ old('jumlah_mobil', isset($har) ? $har->jumlah_mobil : '') }}" required min="1">
                    @error('jumlah_mobil')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="pembayaran" class="form-label">Pembayaran</label>
                    <input type="number" step="0.01" name="pembayaran" class="form-control" id="pembayaran"
                           value="{{ old('pembayaran', isset($har) ? $har->pembayaran : '') }}" required min="0">
                    @error('pembayaran')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" class="form-control" id="status"
                           value="{{ old('status', isset($har) ? $har->status : '') }}" required>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($har) ? 'Update Data' : 'Tambah Data' }}
                </button>
            </form>
        </div>
    </div>
@endsection
