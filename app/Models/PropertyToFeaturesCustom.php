<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToFeaturesCustom extends Model
{
    protected $table = 'property_to_features_custom';
    protected $primaryKey = 'property_to_features_custom_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_feature',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
