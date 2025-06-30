<?php

namespace App\Models;
use App\Models\PropertyGroup;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table = 'property_type';
    protected $primaryKey = 'property_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];
    
    protected $fillable = [
        'property_type_name',
        'property_type_group',
        'property_type_active',
    ];

    // Relationships --done
    public function properties()
    {
        return $this->hasMany(Property::class, 'property_type', 'property_type_id');
    }

    public function propertyGroup()
    {
        return $this->belongsTo(PropertyGroup::class, 'property_type_group', 'property_type_group_id');
    }
    // Reverse Relationships
public function applicantRequirementPropertySubtypes()
    {
        return $this->hasMany(ApplicantRequirementPropertySubtype::class, 'arps_property_type_id', 'property_type_id');
    }
}