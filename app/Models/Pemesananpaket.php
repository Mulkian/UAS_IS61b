<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemesananpaket extends Model
{
    use HasFactory;

    public function pemesans(): HasOne
    {
        return $this->hasOne(Pemesan::class, 'id','pemesans_id');
    }

    public function jenis_mobils(): HasOne
    {
        return $this->hasOne(JenisMobil::class, 'id','jenis_mobils_id');
    }

    public function pengembalianmobils(): BelongsTo
    {
        return $this->hasMany(Pengembalianmobil::class);
    }

    public function transaksis(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class);
    }
}
