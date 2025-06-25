<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyFeatures extends Model
{
    use HasFactory;

    protected $table = 'property_features';
    protected $primaryKey = 'property_features_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_features_name',
    ];

    // Relationships
    public function propertyToFeatures(): HasMany
    {
        return $this->hasMany(PropertyToFeatures::class, 'property_features_id', 'property_features_id');
    }
}
