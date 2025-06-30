<?php

namespace App\Models;
use App\Models\AccountsPaymentMethod;
use App\Models\AccountsTenantDepositCharge;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantDepositChargePayment extends Model
{
    protected $table = 'accounts_tenant_deposit_charge_payment';
    protected $primaryKey = 'tenant_deposit_charge_payment_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'tenant_deposit_charge_payment_date' => 'datetime',
        'tenant_deposit_charge_payment_date_created' => 'datetime',
        'tenant_deposit_charge_payment_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'tenant_deposit_charge_payment_date',
        'tenant_deposit_charge_payment_amount',
        'tenant_deposit_charge_payment_method',
        'tenant_deposit_charge_payment_tenant_deposit_charge_id',
        'tenant_deposit_charge_payment_notes',
        'tenant_deposit_charge_payment_date_created',
        'tenant_deposit_charge_payment_date_updated',
        'tenant_deposit_charge_payment_created_by',
        'tenant_deposit_charge_payment_updated_by'
    ];

    // Relationships --done
    public function paymentMethod()
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'tenant_deposit_charge_payment_method', 'payment_method_id');
    }

    public function tenantDepositCharge()
    {
        return $this->belongsTo(AccountsTenantDepositCharge::class, 'tenant_deposit_charge_payment_tenant_deposit_charge_id', 'tenant_deposit_charge_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_payment_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_payment_updated_by', 'employee_id');
    }
}
