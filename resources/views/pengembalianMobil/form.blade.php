@extends('layouts.master')
@section('title', 'Form Pengembalian Mobil')
@section('heading', 'Form Pengembalian Mobil')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/pengembalianmobil/store/">
                @csrf

                <div class="mb-3">
                    <label for="pemesananpakets_id" class="form-label">Pemesan</label>
                    <select name="pemesananpakets_id" class="form-control" id="pemesananpakets_id">
                        <option value="">Pilih Nama</option>
                        @foreach ($pak as $item)
                            <option value="{{ $item->id }}" data-tgl_pengembalian="{{ $item->tgl_pengembalian }}">
                               {{ $item->id }}
                            </option>
                        @endforeach
                    </select>

                    <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" id="tgl_pengembalian" class="form-control" name="tgl_pengembalian" readonly>
                </div>

                <div class="mb-3">
                    <label for="ganti_rugi" class="form-label">Ganti Rugi</label>
                    <input type="number" name="ganti_rugi" class="form-control" id="ganti_rugi" required>
                </div>

                <div class="mb-3">
                    <label for="pembayaran" class="form-label">Pembayaran</label>
                    <input type="text" name="pembayaran" class="form-control" id="pembayaran" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-control" id="status" required>
                        <option value="mobil dalam kondisi baik">Mobil dalam kondisi baik</option>
                        <option value="mobil mengalami kerusakan">Mobil mengalami kerusakan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

            <script>
                $(document).ready(function() {
                    $('#pemesananpakets_id').change(function() {
                        var selected = $(this).find('option:selected');
                        $('#tgl_pengembalian').val(selected.data('tgl_pengembalian'));
                    });
                });
            </script>
        </div>
    </div>
@endsection
