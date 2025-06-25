<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyFloor extends Model
{
    protected $table = 'property_floor';
    protected $primaryKey = 'property_floor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_floor_name',
        'property_floor_sort',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class, 'property_floor_id', 'property_floor_id');
    }
}
