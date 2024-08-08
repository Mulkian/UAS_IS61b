@extends('layouts.master')
@section('title', 'Daftar Pengembalian Mobil')
@section('heading', 'Daftar Pengembalian Mobil')

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="/pengembalianmobil/form" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Pemesan</th>
                        <th>Tanggal Kembali</th>
                        <th>Tipe Mobil</th>

                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bal as $item)
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$item->pemesananpakets->pemesans->nama_pemesan}}</td>
                            <td>{{ $item->pemesananpakets->tgl_pengembalian}}</td>

                            <td>{{ $item->tipe_mobil }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="/pengembalianmobil/edit/ {{$item->id }}" class="btn btn-info btn-sm"><em class="fa fa-pencil-alt"></em></a>
                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{$item->id}}"><em class="fa fa-eye"></em></button>
                                <div class="modal fade" tabindex="-1" id="detail{{$item->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <a href="pengembalianmobil" class="close" data-dismiss="modal" aria-label="Close">
                                                <em class="icon ni ni-cross"></em>
                                            </a>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Pemesan</td>
                                                        <th scope="row">{{$item->pemesananpakets->pemesans->nama_pemesan}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Pengembalian</td>
                                                        <th scope="row">{{$item->pemesananpakets->tgl_pengembalian}}</th>
                                                    </tr>

                                                    <tr>
                                                        <td>Tipe Mobil</td>
                                                        <th scope="row">{{$item->tipe_mobil}}</th>
                                                    </tr>




                                                    <tr>
                                                        <td>Status</td>
                                                        <th scope="row">{{$item->status}}</th>
                                                    </tr>
                                                    <!-- Add more details as necessary -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$item->id}}"><em class="fa fa-trash"></em></button>
                                            <div class="modal fade" tabindex="-1" id="hapus{{$item->id}}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <a href="pengembalianmobil" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">bahaya</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            apa anda ingin menghapus Data pemesan {{$item->nama_pemesan}}?
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                        <a href="pengembalianmobil" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                                        <form action="/pengembalianmobil/{{$item->id}}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
