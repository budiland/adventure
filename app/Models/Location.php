<?php

namespace App\Models;

use App\Models\FactProduction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected  $guarded = [
        'id',
    ];

    // has many FactProduction
    public function factProduction(): HasMany
    {
        return $this->hasMany(FactProduction::class, 'LocationID');
    }
}
