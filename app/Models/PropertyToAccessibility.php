<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyToAccessibility extends Model
{
    protected $table = 'property_to_accessibility';
    protected $primaryKey = 'property_to_accessibility_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_id',
        'property_accessibility_id',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function accessibility(): BelongsTo
    {
        return $this->belongsTo(PropertyAccessibility::class, 'property_accessibility_id', 'property_accessibility_id');
    }
}
