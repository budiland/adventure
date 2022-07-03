<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Time extends Model
{
    use HasFactory;

    protected  $guarded = [
        'id',
    ];

    // has many FactSales
    public function factSales(): HasMany
    {
        return $this->hasMany(FactSale::class, 'TimeID');
    }

    // has many FactPurchasing
    public function factPurchasing(): HasMany
    {
        return $this->hasMany(FactPurchasing::class, 'TimeID');
    }

    // has many FactProduction
    public function factProduction(): HasMany
    {
        return $this->hasMany(FactProduction::class, 'TimeID');
    }
}
