@extends('layouts.master')
@section('title','Pemesanan')
@section('heading','Pemesanan List')

@section('content')
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pemesanan </h6>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="pemesananpaket/form" class="btn btn-info btn-sm" >Tambah </a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode </th>
                                            <th>Pemesan</th>
                                            <th>Tgl Pemesanan</th>
                                            <th>Tgl Kembali</th>
                                            <th>Durasi/Hari</th>
                                            <th>Mobil</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pak as $item)

                                        <tr>
                                            <td>{{$nomor++}}</td>
                                            <td>{{$item->id}}</td>
                                        <td>{{$item->pemesans->nama_pemesan}}</td>
                                        <td>{{$item->tgl_pesanan}}</td>
                                        <td>{{$item->tgl_pengembalian}}</td>


                                        <td>{{$item->paket_dipilih . ' Hari' }}</td>
                                        <td>{{$item->jenis_mobils_id ?? 'Data Tidak Tersedia'}}</td>
                                        <td>{{$item->harga}}</td>


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
                                                                    <td>Nama Pemesan</td>
                                                                    <th scope="row">{{$item->pemesans->nama_pemesan}}</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>Tanggal Pesanan</td>
                                                                    <th scope="row">{{$item->tgl_pesanan}}</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>Tanggal Pengembalian</td>
                                                                    <th scope="row">{{$item->tgl_pengembalian}}</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>Paket Diambil</td>
                                                                    <th scope="row">{{$item->paket_dipilih}}</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>Mobil</td>
                                                                    <th scope="row">{{$item->jenis_mobils_id ?? 'Data Tidak Tersedia'}}</th>
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
                                                            apa anda ingin menghapus Data pemesan {{$item->nama_pemesan}}?
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
