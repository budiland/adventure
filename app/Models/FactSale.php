<?php

namespace App\Models;

use App\Models\Time;
use App\Models\Store;
use App\Models\Address;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\ShipMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FactSale extends Model
{
    use HasFactory;

    protected  $guarded = [
        'id',
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
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'ProductID');
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
