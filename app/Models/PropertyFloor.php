<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyFloor extends Model
{
    protected $table = 'property_floor';
    protected $primaryKey = 'property_floor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_floor_name',
        'property_floor_sort',
    ];
    // Reverse Relationships
public function propertyRoomLettings()
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_floor', 'property_floor_id');
    }
}