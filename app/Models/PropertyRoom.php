<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoom extends Model
{
    protected $table = 'property_room';
    protected $primaryKey = 'property_room_id';
    public $timestamps = false;
    protected $fillable = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

    public function features()
    {
        return $this->hasMany(PropertyRoomFeature::class, 'property_room_id', 'property_room_id');
    }

    public function lettings()
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_id', 'property_room_id');
    }
}
