<?php

namespace App\Models;

use App\Models\Laundry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function laundry(): HasMany{
        return $this->hasMany(Laundry::class);
    }
}
