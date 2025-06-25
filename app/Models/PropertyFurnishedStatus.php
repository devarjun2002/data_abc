<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyFurnishedStatus extends Model
{
    protected $table = 'property_furnished_status';
    protected $primaryKey = 'property_furnished_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_furnished_status_name',
        'property_furnished_status_rightmove',
        'property_furnished_status_sort'
    ];

    // Relationships
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_furnished_status', 'property_furnished_status_id');
    }

    public function propertyRoomLettings(): HasMany
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_furnished', 'property_furnished_status_id');
    }
}
