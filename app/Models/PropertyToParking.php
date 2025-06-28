<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToParking extends Model
{
    protected $table = 'property_to_parking';
    protected $primaryKey = 'property_to_parking_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_parking_id',
    ];

    // Relationships --done
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function parking(): BelongsTo
    {
        return $this->belongsTo(PropertyParking::class, 'property_parking_id', 'property_parking_id');
    }
}
