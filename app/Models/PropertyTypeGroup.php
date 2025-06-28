<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTypeGroup extends Model
{
    protected $table = 'property_type_group';
    protected $primaryKey = 'property_type_group_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_type_group_name',
        'property_type_group_active',
        'property_type_group_sort'
    ];

    // Relationships --done
    public function propertyTypes()
    {
        return $this->hasMany(PropertyType::class, 'property_type_group', 'property_type_group_id');
    }
}
