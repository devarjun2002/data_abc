<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOutsideSpace extends Model
{
    protected $table = 'property_outside_space';
    protected $primaryKey = 'property_outside_space_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_outside_space_name',
    ];

    // Relationships
    public function propertyToOutsideSpace()
    {
        return $this->hasMany(PropertyToOutsideSpace::class, 'property_outside_space_id', 'property_outside_space_id');
    }
}
