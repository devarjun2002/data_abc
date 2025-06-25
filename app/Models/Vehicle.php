<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle';
    protected $primaryKey = 'vehicle_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'vehicle_registration',
        'vehicle_make_model',
        'vehicle_archived',
    ];
}
