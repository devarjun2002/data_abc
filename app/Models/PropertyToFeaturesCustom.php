<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToFeaturesCustom extends Model
{
    protected $table = 'property_to_features_custom';
    protected $primaryKey = 'property_to_features_custom_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_id',
        'feature_custom_id',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function featureCustom()
    {
        return $this->belongsTo(FeatureCustom::class, 'feature_custom_id', 'feature_custom_id');
    }
}
