<?php

namespace App\Models;
use App\Models\Property;
use App\Models\PropertyAccessibility;

use Illuminate\Database\Eloquent\Model;

class PropertyToAccessibility extends Model
{
    protected $table = 'property_to_accessibility';
    protected $primaryKey = 'property_to_accessibility_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_accessibility_id',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function accessibility()
    {
        return $this->belongsTo(PropertyAccessibility::class, 'property_accessibility_id', 'property_accessibility_id');
    }
}
