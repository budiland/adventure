<?php

namespace App\Models;

use App\Models\FactSale;
use App\Models\FactProduction;
use App\Models\FactPurchasing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected  $guarded = [
        'id',
    ];

    // has many FactSales
    public function factSales(): HasMany
    {
        return $this->hasMany(FactSale::class, 'ProductID');
    }

    // has many FactPurchasing
    public function factPurchasing(): HasMany
    {
        return $this->hasMany(FactPurchasing::class, 'ProductID');
    }

    // has many FactProduction
    public function factProduction(): HasMany
    {
        return $this->hasMany(FactProduction::class, 'ProductID');
    }
}
