@extends('layouts.master')
@section('title','JenisMobil')
@section('heading','JenisMobil List')

@section('content')
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Jenis Mobil</h6>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="jenismobil/form" class="btn btn-info btn-sm" >Tambah </a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Type Mobil</th>
                                            <th>Tahun Mobil</th>
                                            <th>warna Mobil</th>
                                            <th>Plat Mobil</th>

                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($jen as $item)

                                        <tr>
                                            <td>{{$nomor++}}</td>
                                        <td>{{$item->tipe_mobil}}</td>
                                        <td>{{$item->tahun_mobil}}</td>
                                        <td>{{$item->warna_mobil}}</td>
                                        <td>{{$item->plat_nomor}}</td>


                                         <td>       <a href="jenismobil/edit/{{$item->id}}" class="btn btn-info btn-sm"><em class="fa fa-pencil-alt"></em></a>
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{$item->id}}"><em class="fa fa-eye"></em></button>
                                            <div class="modal fade" tabindex="-1" id="detail{{$item->id}}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <a href="jenismobil" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tipe Mobil</td>
                                                                    <th scope="row">{{$item->tipe_mobil}}</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tahun Mobil</td>
                                                                    <th scope="row">{{$item->tahun_mobil}}</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Warna Mobil</td>
                                                                    <th scope="row">{{$item->warna_mobil}}</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>plat Mobil</td>
                                                                    <th scope="row">{{$item->plat_nomor}}</th>
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
                                                        <a href="jenismobil" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">bahaya</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            apa anda ingin menghapus Data pemesan {{$item->tipe_mobil}}?
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                        <a href="jenismobil" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                                        <form action="/jenismobil/{{$item->id}}" method="post">
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
