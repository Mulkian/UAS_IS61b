@extends('layouts.master')
@section('title', 'Form Pengembalian Mobil')
@section('heading', 'Form Pengembalian Mobil')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/pengembalianmobil/store/">
                @csrf

                <div class="mb-3">
                    <label for="id_pesanan" class="form-label">ID Pesanan</label>
                    <input type="text" name="id_pesanan" class="form-control" id="id_pesanan" required>
                </div>

                <div class="mb-3">
                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control" id="tgl_kembali" required>
                </div>



                <div class="mb-3">
                    <label for="ganti_rugi" class="form-label">Ganti Rugi</label>
                    <input type="number" name="ganti_rugi" class="form-control" id="ganti_rugi" required>
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
        </div>
    </div>
@endsection
