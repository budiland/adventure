<?php

namespace App\Models;

use App\Models\FactSale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected  $guarded = [
        'id',
    ];

    // has many FactSales
    public function factSales(): HasMany
    {
        return $this->hasMany(FactSale::class, 'AddressID');
    }
}
