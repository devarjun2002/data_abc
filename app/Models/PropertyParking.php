<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyParking extends Model
{
    protected $table = 'property_parking';
    protected $primaryKey = 'property_parking_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_parking_name',
    ];

    // Relationships
    public function properties()
    {
        return $this->hasMany(Property::class, 'property_parking_id', 'property_parking_id');
    }

    public function propertyToParking()
    {
        return $this->hasMany(PropertyToParking::class, 'property_parking_id', 'property_parking_id');
    }
    // Reverse Relationships
public function propertyToParkings()
    {
        return $this->hasMany(PropertyToParking::class, 'property_parking_id', 'property_parking_id');
    }
}