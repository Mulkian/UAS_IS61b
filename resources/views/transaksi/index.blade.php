@extends('layouts.master')
@section('title','Transaksi')
@section('heading','Transaksi List')

@section('content')
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="transaksi/form" class="btn btn-info btn-sm" >Tambah </a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pemesan</th>
                                            <th>Mobil</th>
                                            <th>Durasi Sewa</th>
                                            <th>Harga Sewa</th>
                                            <th>Ganti Rugi</th>
                                            <th>Total Bayar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tra as $item)

                                        <tr>
                                            <td>{{$nomor++}}</td>
                                        <td>{{$item->nama_pemesan}}</td>
                                        <td>{{$item->tipe_mobil}}</td>
                                        <td>{{$item->durasi_sewa}}</td>
                                        <td>{{$item->harga_sewa}}</td>
                                        <td>{{$item->ganti_rugi}}</td>
                                        <td>{{$item->total_bayar}}</td>
                                        <td>{{$item->status}}</td>


                                         <td>       <a href="transaksi/edit/{{$item->id}}" class="btn btn-info btn-sm"><em class="fa fa-pencil-alt"></em></a>
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{$item->id}}"><em class="fa fa-eye"></em></button>
                                            <div class="modal fade" tabindex="-1" id="detail{{$item->id}}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <a href="transaksi" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Nama Pemesan</td>
                                                                    <th scope="row">{{$item->nama_pemesan}}</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tipe Mobil</td>
                                                                    <th scope="row">{{$item->tipe_mobil}}</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Durasi Sewa</td>
                                                                    <th scope="row">{{$item->durasi_sewa}}</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>Ganti Rugi</td>
                                                                    <th scope="row">{{$item->ganti_rugi}}</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Total Bayar</td>
                                                                    <th scope="row">{{$item->total_bayar}}</th>
                                                                </tr>

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
                                                        <a href="transaksi" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">bahaya</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            apa anda ingin menghapus Data pemesan {{$item->nama_pemesan}}?
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                        <a href="transaksi" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                                        <form action="/transaksi/{{$item->id}}" method="post">
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
