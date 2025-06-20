<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTypeGroup extends Model
{
    protected $table = 'property_type_group';
    protected $primaryKey = 'property_type_group_id';
    public $timestamps = false;

    protected $fillable = [
        'property_type_group_name',
        'property_type_group_active',
        'property_type_group_sort'
    ];

    protected $casts = [
        'property_type_group_active' => 'boolean'
    ];

    // Relationships
    public function propertyTypes()
    {
        return $this->hasMany(PropertyType::class, 'property_type_group', 'property_type_group_id');
    }
}
