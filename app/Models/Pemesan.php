<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemesan extends Model
{
    use HasFactory;

    public function pemesananpakets(): BelongsTo
    {
        return $this->belongsTo(Pemesananpakets::class);
    }

    public function pengembalianmobils(): BelongsTo
    {
        return $this->belongsTo(Pengembalianmobil::class);
    }
}
