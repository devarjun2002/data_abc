<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceChargeStatus extends Model
{
    protected $table = 'service_charge_status';
    protected $primaryKey = 'service_charge_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'service_charge_status_name',
    ];

    public function properties(): HasMany {
        return $this->hasMany(Property::class, 'property_service_charge_status', 'service_charge_status_id');
    }
}
