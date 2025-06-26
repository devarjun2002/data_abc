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
}
