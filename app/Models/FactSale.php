<?php

namespace App\Models;

use App\Models\Ship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FactSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'ship_id',
        // 'date',
        // 'amount',
    ];

    // belongs to Ship
    public function ship(): BelongsTo
    {
        return $this->belongsTo(Ship::class, 'ship_id');
    }
}
