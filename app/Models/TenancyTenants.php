<?php

namespace App\Models;
use App\Models\Property;
use App\Models\Tenancy;
use App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;

class TenancyTenants extends Model
{
    protected $table = 'tenancy_tenants';
    protected $primaryKey = 'tenancy_tenants_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenant_id',
        'tenancy_id',
        'tenant_lead',
        'property_id'
    ];

    // Relationships --done
    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'tenant_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}
