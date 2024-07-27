@extends('layouts.master')
@section('title','Pemesanan')
@section('heading','Pemesanan List')

@section('content')
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="pemesanan/form" class="btn btn-info btn-sm">Tambah</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id pemesanan</th>
                                            <th>kd pemesanan</th>
                                            <th>nomor pemesanan</th>
                                            <th>tanggal pesanan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($peme as $item)

                                        <tr>
                                            <td>{{$nomor++}}</td>
                                        <td>{{$item->id_pesanan}}</td>
                                        <td>{{$item->kd_mobil}}</td>
                                        <td>{{$item->no_pemesanan}}</td>
                                        <td>{{$item->tanggal_pesanan}}</td>
                                         <td>       <a href="pemesanan/edit/1" class="btn btn-info btn-sm"><em class="fa fa-pencil-alt"></em></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$item->id}}"><em class="fa fa-trash"></em></button>
                                            <div class="modal fade" tabindex="-1" id="hapus{{$item->id}}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <a href="petugas" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">bahaya</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            apa anda ingin menghapus Data pemesan {{$item->id_pemesanan}}?
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                        <a href="petugas" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                                        <form action="/pemesanan/{{$item->id}}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>

                                        @empty

                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection
