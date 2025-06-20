<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyParking extends Model
{
    protected $table = 'property_parking';
    protected $primaryKey = 'property_parking_id';
    public $timestamps = false;
    protected $guarded = [];

    public function properties()
    {
        return $this->hasMany(Property::class, 'property_parking_id', 'property_parking_id');
    }
}
