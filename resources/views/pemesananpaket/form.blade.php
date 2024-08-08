@extends('layouts.master')
@section('title','Form Pemesanan')
@section('heading','Form Pemesanan')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="pemesananpaket/store">
                @csrf
                <div class="mb-3">
                    <label for="pemesans_id" class="form-label">Nama Pemesan</label>
                    <select name="pemesans_id" class="form-control" id="pemesans_id">
                        <option value="">-Nama Pemesan-</option>
                        @foreach ($pem as $item)
                            <option value="{{ $item->id }}">{{ $item->kode }} - {{ $item->nama_pemesan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tgl_pesanan" class="form-label">Tanggal Pesanan</label>
                    <input type="date" name="tgl_pesanan" class="form-control" id="tgl_pesanan" required>
                </div>

                <div class="mb-3">
                    <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tgl_pengembalian" class="form-control" id="tgl_pengembalian" required>
                </div>

                <div class="mb-3">
                    <label for="paket_dipilih" class="form-label">Paket Dipilih</label>
                    <select name="paket_dipilih" class="form-control" id="paket_dipilih" required>
                        @for ($i = 1; $i <= 30; $i++)
                            <option value="{{ $i }}">{{ $i }} Hari</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jenis_mobils_id" class="form-label">Mobil</label>
                    <select name="jenis_mobils_id" class="form-control" id="jenis_mobils_id">
                        <option value="">-Mobil Yang Dipilih-</option>
                        @foreach ($jen as $item)
                            <option value="{{ $item->tipe_mobil}}" data-harga="{{ $item->harga }}">
                                {{ $item->tipe_mobil }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" readonly>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

            <script>
                $(document).ready(function() {
                    // Saat tipe mobil dipilih, harga akan otomatis diisi
                    $('#jenis_mobils_id').change(function() {
                        var selected = $(this).find('option:selected');
                        $('#harga').val(selected.data('harga'));
                    });
                });
            </script>
        </div>
    </div>
@endsection
