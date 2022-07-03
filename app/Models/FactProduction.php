<?php

namespace App\Models;

use App\Models\Time;
use App\Models\Product;
use App\Models\Location;
use App\Models\WorkOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FactProduction extends Model
{
    use HasFactory;

    protected $table = 'factproduction';

    protected  $guarded = [
        'id',
    ];

    public function time(): BelongsTo
    {
        return $this->belongsTo(Time::class, 'TimeID');
    }
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'LocationID');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }
    public function workOrder(): BelongsTo
    {
        return $this->belongsTo(WorkOrder::class, 'WorkOrderID');
    }
}
