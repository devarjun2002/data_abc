<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTenancy extends Model
{
    protected $table = 'property_tenancy';
    protected $primaryKey = 'property_tenancy_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_id',
        'property_tenancy_description',
        'property_tenancy_tenant',
        'property_tenancy_bedrooms',
        'property_tenancy_size',
        'property_tenancy_size_unit',
        'property_tenancy_rent',
        'property_tenancy_rent_frequency',
        'property_tenancy_erv',
        'property_tenancy_erv_frequency',
        'property_tenancy_lease_type',
        'property_tenancy_lease_start_date',
        'property_tenancy_lease_expiry_date',
        'property_tenancy_public_notes',
        'property_tenancy_sort',
    ];
}
