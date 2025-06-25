<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UtilityMeterLocation extends Model
{
    protected $table = 'utility_meter_location';
    protected $primaryKey = 'utility_meter_location_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'utility_meter_location_name',
    ];
}
