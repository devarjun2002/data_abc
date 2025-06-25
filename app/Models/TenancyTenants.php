<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyTenants extends Model
{
    protected $table = 'tenancy_tenants';
    protected $primaryKey = 'tenancy_tenants_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenant_id',
        'tenancy_id',
        'tenant_lead',
        'property_id'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'tenant_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
