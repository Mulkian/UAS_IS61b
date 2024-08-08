<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Transaksi extends Model
{
    use HasFactory;

    public function pemesans(): HasOne
    {
        return $this->hasOne(Pemesan::class, 'id','pemesans_id');
    }

    public function pemesananpakets(): HasOne
    {
        return $this->hasOne(Pemesananpaket::class, 'id','pemesananpakets_id');
    }
}
