<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanharian extends Model
{
    use HasFactory;

    protected $table = 'pemesanharian';

    protected $fillable = [
        'kode_pesanan',
        'tgl_pesanan',
        'tgl_pengembalian',
        'jumlah_mobil',
        'pembayaran',
        'status',
    ];
}
