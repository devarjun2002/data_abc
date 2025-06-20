<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyLeaseObligations extends Model
{
    protected $table = 'property_lease_obligations';
    protected $primaryKey = 'property_lease_obligations_id';
    public $timestamps = false;

    protected $fillable = [
        'property_lease_obligations_name'
    ];

    // Add relationships once related models are created
}
