<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyParking extends Model
{
    protected $table = 'property_parking';
    protected $primaryKey = 'property_parking_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_parking_name',
    ];

    // Relationships
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_parking_id', 'property_parking_id');
    }

    public function propertyToParking(): HasMany
    {
        return $this->hasMany(PropertyToParking::class, 'property_parking_id', 'property_parking_id');
    }
}
