<?php

namespace App\Models;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laundry extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pelanggan(): BelongsTo{
        return $this->belongsTo(Pelanggan::class);
    }

}
