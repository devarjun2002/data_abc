<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    public function property()
    {
        return $this->belongsTo(Property::class, 'utility_meter_property', 'property_id');
    }

    public function utility()
    {
        return $this->belongsTo(Utility::class, 'utility_meter_utility', 'utility_id');
    }

    public function meterType()
    {
        return $this->belongsTo(UtilityMeterType::class, 'utility_meter_type', 'utility_meter_type_id');
    }

    public function location()
    {
        return $this->belongsTo(UtilityMeterLocation::class, 'utility_meter_location', 'utility_meter_location_id');
    }

    public function provider()
    {
        return $this->belongsTo(UtilityProvider::class, 'utility_meter_provider', 'utility_provider_id');
    }
}
