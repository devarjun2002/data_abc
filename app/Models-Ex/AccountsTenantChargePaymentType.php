<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantChargePaymentType extends Model
{
    protected $table = 'accounts_tenant_charge_payment_type';
    protected $primaryKey = 'accounts_tenant_charge_payment_type_id';
    public $timestamps = false;

    protected $fillable = [
        'accounts_tenant_charge_payment_type_name'
    ];

    // Relationships
    public function tenantChargePayments()
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'accounts_tenant_charge_payment_type');
    }
}
