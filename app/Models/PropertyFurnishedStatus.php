<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyFurnishedStatus extends Model
{
    protected $table = 'property_furnished_status';
    protected $primaryKey = 'property_furnished_status_id';
    public $timestamps = false;

    protected $fillable = [
        'property_furnished_status_name',
        'property_furnished_status_rightmove'
    ];

    // Relationships
    public function properties()
    {
        return $this->hasMany(Property::class, 'property_letting_furnished_status', 'property_furnished_status_id');
    }

    public function propertyRoomLettings()
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_furnished', 'property_furnished_status_id');
    }
}
