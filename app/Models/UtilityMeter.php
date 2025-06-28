<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UtilityMeter extends Model
{
    protected $table = 'utility_meter';
    protected $primaryKey = 'utility_meter_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'utility_meter_property',
        'utility_meter_utility',
        'utility_meter_type',
        'utility_meter_location',
        'utility_meter_notes',
        'utility_meter_provider'
    ];

    // Relationships --done
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'utility_meter_property');
    }

    public function utility(): BelongsTo
    {
        return $this->belongsTo(Utility::class, 'utility_meter_utility');
    }

    public function meterType(): BelongsTo
    {
        return $this->belongsTo(UtilityMeterType::class, 'utility_meter_type');
    }

    public function meterLocation(): BelongsTo
    {
        return $this->belongsTo(UtilityMeterLocation::class, 'utility_meter_location');
    }

    public function provider(): BelongsTo
    {
        return $this->belongsTo(UtilityProvider::class, 'utility_meter_provider');
    }
}
