<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
