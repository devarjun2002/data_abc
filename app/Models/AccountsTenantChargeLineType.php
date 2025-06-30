<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantChargeLineType extends Model
{
    protected $table = 'accounts_tenant_charge_line_type';
    protected $primaryKey = 'tenant_charge_line_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenant_charge_line_type_name'
    ];

    // Relationships --done
    public function tenantChargeLines()
    {
        return $this->hasMany(AccountsTenantChargeLine::class, 'tenant_charge_line_type', 'tenant_charge_line_type_id');
    }
    // Reverse Relationships
public function accountsTenantChargeLines()
    {
        return $this->hasMany(AccountsTenantChargeLine::class, 'tenant_charge_line_type', 'tenant_charge_line_type_id');
    }
}