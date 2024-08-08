@extends('layouts.master')
@section('title','Form Transaksi')
@section('heading','Form Transaksi')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/transaksi/store/">
                @csrf
                <div class="mb-3">
                    <label for="pemesananpakets_id" class="form-label">Kode Pemesan</label>
                    <select name="pemesananpakets_id" class="form-control" id="pemesananpakets_id">
                        <option value="">Pilih Nama</option>
                        @foreach ($pak as $item)
                            <option value="{{ $item->pemesans_id }}" data-jenis_mobils_id="{{ $item->jenis_mobils_id }}" data-paket_dipilih="{{ $item->paket_dipilih }}" data-harga="{{ $item->harga }}">
                               {{ $item->id }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tipe_mobil" class="form-label">Tipe Mobil</label>
                    <input type="text" name="jenis_mobils_id" class="form-control" id="jenis_mobils_id" readonly>
                </div>

                <div class="mb-3">
                    <label for="durasi_sewa" class="form-label">Durasi/Hari</label>
                    <input type="number" name="paket_dipilih" class="form-control" id="paket_dipilih" required>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Sewa</label>
                    <input type="number" name="harga" class="form-control" id="harga" required>
                </div>

                <div class="mb-3">
                    <label for="ganti_rugi" class="form-label">Ganti Rugi</label>
                    <input type="number" name="ganti_rugi" class="form-control" id="ganti_rugi" required>
                </div>

                <div class="mb-3">
                    <label for="total_bayar" class="form-label">Total Bayar</label>
                    <input type="number" name="total_bayar" class="form-control" id="total_bayar" readonly required>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

            <script>
                $(document).ready(function() {
                    // Saat kode pemesan dipilih, isi tipe mobil, durasi, dan harga sewa
                    $('#pemesananpakets_id').change(function() {
                        var selected = $(this).find('option:selected');
                        $('#jenis_mobils_id').val(selected.data('jenis_mobils_id'));
                        $('#paket_dipilih').val(selected.data('paket_dipilih'));
                        $('#harga').val(selected.data('harga'));
                        calculateTotal();
                    });


                    $('#paket_dipilih, #harga, #ganti_rugi').on('input', function() {
                        calculateTotal();
                    });

                    function calculateTotal() {
                        var durasi = parseFloat($('#paket_dipilih').val()) || 0;
                        var harga = parseFloat($('#harga').val()) || 0;
                        var gantiRugi = parseFloat($('#ganti_rugi').val()) || 0;
                        var total = (durasi * harga) + gantiRugi;
                        $('#total_bayar').val(total);
                    }
                });
            </script>
        </div>
    </div>
@endsection
