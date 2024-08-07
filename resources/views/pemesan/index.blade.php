@extends('layouts.master')
@section('title','Data Pemesan')
@section('heading','Data Pemesan')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="pemesan/form" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            <div class="card-tools">
                <!-- Removed unnecessary closing button tag -->
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>No Handphone</th>
                        <th>Alamat</th>
                        <th>Foto Indentitas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pem as $item)
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$item->nama_pemesan}}</td>
                            <td>{{$item->hp_pemesan}}</td>
                            <td>{{$item->alamat_pemesan}}</td>
                            <td>
                                <img src="{{ asset('/foto/'.$item->foto) }}" width="100" alt="Foto KTP">
                            </td>
                            <td>
                                <a href="pemesan/edit/{{$item->id}}" class="btn btn-info btn-sm"><em class="fa fa-pencil-alt"></em></a>
                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{$item->id}}"><em class="fa fa-eye"></em></button>
                                <div class="modal fade" tabindex="-1" id="detail{{$item->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <a href="pemesan" class="close" data-dismiss="modal" aria-label="Close">
                                                <em class="icon ni ni-cross"></em>
                                            </a>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Nama Pemesan</td>
                                                        <th scope="row">{{$item->nama_pemesan}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>No HP</td>
                                                        <th scope="row">{{$item->hp_pemesan}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Pemesan</td>
                                                        <th scope="row">{{$item->alamat_pemesan}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Foto KTP</td>
                                                        <th scope="row"><img src="{{ asset('/foto/'.$item->foto) }}" width="100" alt="Foto KTP"></th>
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
                                            <a href="pemesan" class="close" data-dismiss="modal" aria-label="Close">
                                                <em class="icon ni ni-cross"></em>
                                            </a>
                                            <div class="modal-header">
                                                <h5 class="modal-title">Peringatan</h5>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda ingin menghapus data pemesan {{$item->nama_pemesan}}?
                                            </div>
                                            <div class="modal-footer bg-light">
                                                <a href="pemesan" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                                <form action="/pemesan/{{$item->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
