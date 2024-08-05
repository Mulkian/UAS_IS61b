@extends('layouts.master')
@section('title', 'Detail Pesanan Harian')
@section('heading', 'Detail Pesanan Harian')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>Kode Pesanan: {{ $item->kode_pesanan }}</h5>
            <p>Tanggal Pesanan: {{ $item->tgl_pesanan }}</p>
            <p>Tanggal Pengembalian: {{ $item->tgl_pengembalian }}</p>
            <p>Jumlah Mobil: {{ $item->jumlah_mobil }}</p>
            <p>Pembayaran: {{ $item->pembayaran }}</p>
            <p>Status: {{ $item->status }}</p>
            <a href="{{ route('pemesanharian.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
