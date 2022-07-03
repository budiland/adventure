<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected  $guarded = [
        'id',
    ];

    // has many FactPurchasing
    public function factPurchasing(): HasMany
    {
        return $this->hasMany(FactPurchasing::class, 'VendorID');
    }
}
