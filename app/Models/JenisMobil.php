<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JenisMobil extends Model
{
    use HasFactory;

    public function pemesananpakets(): BelongsTo
    {
        return $this->belongsTo(Pemesananpakets::class);
    }
    
}

