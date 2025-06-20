<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyFeature extends Model
{
    protected $table = 'property_features';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_feature_property', 'property_feature_id', 'property_id');
    }
}
