<?php

namespace App\Models;

use App\Models\FactSale;
use App\Models\FactPurchasing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected  $guarded = [
        'id',
    ];

    // has many FactSales
    public function factSales(): HasMany
    {
        return $this->hasMany(FactSale::class, 'EmployeeID');
    }

    // has many FactPurchasing
    public function factPurchasing(): HasMany
    {
        return $this->hasMany(FactPurchasing::class, 'EmployeeID');
    }
}
