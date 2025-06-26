<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyAreaUnit extends Model
{
    protected $table = 'property_area_unit';
    protected $primaryKey = 'property_area_unit_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_area_unit_name',
        'property_area_unit_singular',
        'property_area_unit_name_short'
    ];

    // Relationships
    public function propertyRooms(): HasMany
    {
        return $this->hasMany(PropertyRoom::class, 'property_room_area_unit', 'property_area_unit_id');
    }
}
