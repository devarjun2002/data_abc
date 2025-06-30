<?php

namespace App\Models;
use App\Models\Property;
use App\Models\PropertyOutsideSpace;

use Illuminate\Database\Eloquent\Model;

class PropertyToOutsideSpace extends Model
{
    protected $table = 'property_to_outside_space';
    protected $primaryKey = 'property_to_outside_space_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_outside_space_id',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function outsideSpace()
    {
        return $this->belongsTo(PropertyOutsideSpace::class, 'property_outside_space_id', 'property_outside_space_id');
    }
}
