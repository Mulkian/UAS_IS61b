@extends('layouts.master')
@section('title', 'Form Pengembalian Mobil')
@section('heading', 'Form Pengembalian Mobil')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/pengembalianmobil/{{ $bal->id }}">
                @method('PUT')
                @csrf

              



                <div class="mb-3">
                    <label for="ganti_rugi" class="form-label">Ganti Rugi</label>
                    <input type="number" name="ganti_rugi" class="form-control" value="{{ $bal->ganti_rugi }}" id="ganti_rugi" required>
                </div>

                <div class="mb-3">
                    <label for="ganti_rugi" class="form-label">Pembayaran</label>
                    <input type="text" name="pembayaran" class="form-control" value="{{ $bal->pembayaran }}" id="pembayaran" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-control" id="status" required>
                        <option value="mobil dalam kondisi baik">Mobil dalam kondisi baik</option>
                        <option value="mobil mengalami kerusakan">Mobil mengalami kerusakan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection
