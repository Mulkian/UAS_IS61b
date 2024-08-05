@extends('layouts.master')
@section('title', 'Daftar Pemesanharian')
@section('heading', 'Daftar Pemesanharian')

@section('content')
    <a href="{{ route('pemesanharian.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Pesanan</th>
                        <th>Tanggal Pesanan</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Jumlah Mobil</th>
                        <th>Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($har as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td> <!-- Menggunakan $loop->iteration untuk nomor baris -->
                            <td>{{ $item->kode_pesanan }}</td>
                            <td>{{ $item->tgl_pesanan }}</td>
                            <td>{{ $item->tgl_pengembalian }}</td>
                            <td>{{ $item->jumlah_mobil }}</td>
                            <td>{{ $item->pembayaran }}</td>
                            <td>{{ $item->status }}</td>
                            <td class="d-flex">
                                <a href="{{ route('pemesanharian.show', $item->id) }}" class="btn btn-info btn-sm mr-1">
                                    <i class="fas fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('pemesanharian.edit', $item->id) }}" class="btn btn-warning btn-sm mr-1">Edit</a>
                                <form action="{{ route('pemesanharian.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
