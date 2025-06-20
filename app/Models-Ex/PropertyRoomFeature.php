<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoomFeature extends Model
{
    protected $table = 'property_room_features';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['feature', 'description'];

    // Add relationships here if needed
    public function room()
    {
        return $this->belongsTo(PropertyRoom::class, 'property_room_id', 'property_room_id');
    }
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
