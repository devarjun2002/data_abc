<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsDepositAction extends Model
{
    protected $table = 'accounts_deposit_action';
    protected $primaryKey = 'deposit_action_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'deposit_action_name',
        'deposit_action_sort',
        'deposit_action_archived'
    ];

    // Relationships - Add reverse relationships for models that reference this
    public function tenantDepositCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantDepositCharge::class, 'tenant_deposit_charge_action', 'deposit_action_id');
    }

    public function tenantDepositChargePayments(): HasMany
    {
        return $this->hasMany(AccountsTenantDepositChargePayment::class, 'tenant_deposit_charge_payment_action', 'deposit_action_id');
    }
}
