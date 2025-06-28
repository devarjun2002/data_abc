<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoom extends Model
{
    protected $table = 'property_room';
    protected $primaryKey = 'property_room_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_room_name',
        'property_room_description',
        'property_room_length',
        'property_room_width',
        'property_room_dimension_unit',
        'property_room_dimension_text',
        'property_room_images_url',
        'property_room_sort',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function dimensionUnit()
    {
        return $this->belongsTo(PropertyAreaUnit::class, 'property_room_dimension_unit', 'property_area_unit_id');
    }
}
