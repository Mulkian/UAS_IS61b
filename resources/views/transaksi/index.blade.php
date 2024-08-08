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
                                            <th>Durasi/Hari</th>
                                            <th>Harga Sewa</th>
                                            <th>Ganti Rugi</th>
                                            <th>Total Bayar</th>

                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tra as $item)

                                        <tr>
                                            <td>{{$nomor++}}</td>
                                        <td>{{$item->pemesans->nama_pemesan}}</td>
                                        <td>{{$item->tipe_mobil}}</td>
                                        <td>{{$item->durasi_sewa  . ' Hari'}} </td>
                                        <td>{{$item->harga_sewa}}</td>
                                        <td>{{$item->ganti_rugi}}</td>
                                        <td>{{$item->total_bayar}}</td>

                                        <td>
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

                                        </td>



                                        </tr>

                                        @empty

                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection
