<?php

namespace App\Models;

use App\Models\Ship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FactSale extends Model
{
    use HasFactory;

    protected  $fillable = [
        'TimeID',
        'CustomerID',
        'StoreID',
        'ProductionID',
        'AddressID',
        'EmployeeID',
        'ShipMethodID',

    ];

    // belongs to

    public function time(): BelongsTo
    {
        return $this->belongsTo(Time::class, 'TimeID');
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class, 'StoreID');
    }
    public function production(): BelongsTo
    {
        return $this->belongsTo(Production::class, 'ProductionID');
    }
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'AddressID');
    }
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'EmployeeID');
    }
    public function shipmethod(): BelongsTo
    {
        return $this->belongsTo(ShipMethod::class, 'ShipMethodID');
    }
}
