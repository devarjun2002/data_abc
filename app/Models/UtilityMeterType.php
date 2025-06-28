<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UtilityMeterType extends Model
{
    protected $table = 'utility_meter_type';
    protected $primaryKey = 'utility_meter_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'utility_meter_type_name',
    ];

    // Relationships --done
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'utility_meter_property', 'property_id');
    }

    public function utility(): BelongsTo
    {
        return $this->belongsTo(Utility::class, 'utility_meter_utility', 'utility_id');
    }

    public function meterType(): BelongsTo
    {
        return $this->belongsTo(UtilityMeterType::class, 'utility_meter_type', 'utility_meter_type_id');
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(UtilityMeterLocation::class, 'utility_meter_location', 'utility_meter_location_id');
    }

    public function provider(): BelongsTo
    {
        return $this->belongsTo(UtilityProvider::class, 'utility_meter_provider', 'utility_provider_id');
    }
}
