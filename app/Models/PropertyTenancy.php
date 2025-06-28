<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTenancy extends Model
{
    protected $table = 'property_tenancy';
    protected $primaryKey = 'property_tenancy_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_tenancy_lease_start_date' => 'datetime',
        'property_tenancy_lease_expiry_date' => 'datetime',
    ];

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

    // Relationships --done
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function sizeUnit(): BelongsTo
    {
        return $this->belongsTo(PropertyAreaUnit::class, 'property_tenancy_size_unit', 'property_area_unit_id');
    }

    public function rentFrequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'property_tenancy_rent_frequency', 'tenancy_rent_frequency_id');
    }

    public function ervFrequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'property_tenancy_erv_frequency', 'tenancy_rent_frequency_id');
    }

    public function leaseType(): BelongsTo
    {
        return $this->belongsTo(LeaseType::class, 'property_tenancy_lease_type', 'lease_type_id');
    }
}
