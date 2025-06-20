<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyUseClass extends Model
{
    protected $table = 'property_use_class';
    protected $primaryKey = 'property_use_class_id';
    public $timestamps = false;
    protected $guarded = [];

    public function propertyToUseClasses()
    {
        return $this->hasMany(PropertyToUseClass::class, 'property_use_class_id', 'property_use_class_id');
    }
}
