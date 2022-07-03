<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactPurchasing extends Model
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
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'VendorID');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'ProductID');
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
