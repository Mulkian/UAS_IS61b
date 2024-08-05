@extends('layouts.master')
@section('title','Pemesananpaket')
@section('heading','Pemesananpaket List')

@section('content')
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pemesanan Paket</h6>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="pemesananpaket/form" class="btn btn-info btn-sm" >Tambah </a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Mobil</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Tanggal pemesanan</th>

                                            <th>Paket Dipilih</th>

                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pak as $item)

                                        <tr>
                                            <td>{{$nomor++}}</td>
                                        <td>{{$item->kode_pesanan}}</td>
                                        <td>{{$item->tgl_pengembalian}}</td>
                                        <td>{{$item->tgl_pesanan}}</td>

                                        <td>{{$item->paket_dipilih}}</td>


                                         <td>       <a href="pemesananpaket/edit/{{$item->id}}" class="btn btn-info btn-sm"><em class="fa fa-pencil-alt"></em></a>
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{$item->id}}"><em class="fa fa-eye"></em></button>
                                            <div class="modal fade" tabindex="-1" id="detail{{$item->id}}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <a href="pemesananpaket" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Kode Mobil</td>
                                                                    <th scope="row">{{$item->kode_mobil}}</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Taanggal Pengembalian</td>
                                                                    <th scope="row">{{$item->tgl_pengembalian}}</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Pesanan</td>
                                                                    <th scope="row">{{$item->tgl_pesanan}}</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>Paket Diambil</td>
                                                                    <th scope="row">{{$item->paket_dipilih}}</th>
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
                                                        <a href="pemesananpaket" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">bahaya</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            apa anda ingin menghapus Data pemesan {{$item->kode_mobil}}?
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                        <a href="pemesananpaket" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                                        <form action="/pemesananpaket/{{$item->id}}" method="post">
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
