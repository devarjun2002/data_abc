<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyFeatureProperty extends Model
{
    protected $table = 'property_feature_property';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
    public function feature()
    {
        return $this->belongsTo(PropertyFeature::class, 'property_feature_id', 'id');
    }
}
