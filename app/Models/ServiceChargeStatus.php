<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceChargeStatus extends Model
{
    protected $table = 'service_charge_status';
    protected $primaryKey = 'service_charge_status_id';
    public $timestamps = false;

    protected $fillable = [
        'service_charge_status_name'
    ];

    // Add relationships once related models are created
}
