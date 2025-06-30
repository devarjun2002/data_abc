<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantChargePaymentType extends Model
{
    protected $table = 'accounts_tenant_charge_payment_type';
    protected $primaryKey = 'accounts_tenant_charge_payment_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'accounts_tenant_charge_payment_type_name'
    ];

    // Relationships --done
    public function tenantChargePayments()
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'accounts_tenant_charge_payment_type', 'accounts_tenant_charge_payment_type_id');
    }
    // Reverse Relationships
public function accountsTenantChargePayments()
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'accounts_tenant_charge_payment_type', 'accounts_tenant_charge_payment_type_id');
    }
}