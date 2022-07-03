<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkOrder extends Model
{
    use HasFactory;

    protected  $guarded = [
        'id',
    ];

    // has many FactProduction
    public function factProduction(): HasMany
    {
        return $this->hasMany(FactProduction::class, 'WorkOrderID');
    }
}
