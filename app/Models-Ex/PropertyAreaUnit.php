<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAreaUnit extends Model
{
    protected $table = 'property_area_unit';
    protected $primaryKey = 'property_area_unit_id';
    public $timestamps = false;

    protected $fillable = [
        'property_area_unit_name',
        'property_area_unit_singular',
        'property_area_unit_name_short'
    ];

    // Add relationships once the related models are created
}
