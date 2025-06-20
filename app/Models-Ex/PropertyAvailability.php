<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAvailability extends Model
{
    protected $table = 'property_availability';
    protected $primaryKey = 'property_availability_id';
    public $timestamps = false;

    protected $fillable = [
        'property_availability_name',
        'property_availability_display_name',
        'property_availability_display_name2',
        'property_availability_seo_name',
        'property_availability_xml_name',
        'property_availability_sort'
    ];

    // Relationships
    public function properties()
    {
        return $this->hasMany(Property::class, 'property_availability', 'property_availability_id');
    }
}
