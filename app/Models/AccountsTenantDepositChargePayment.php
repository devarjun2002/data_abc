<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsTenantDepositChargePayment extends Model
{
    protected $table = 'accounts_tenant_deposit_charge_payment';
    protected $primaryKey = 'tenant_deposit_charge_payment_id';
    public $timestamps = false;
    protected $guarded = [];

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

    // Relationships
    public function depositCharge(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantDepositCharge::class, 'tenant_deposit_charge_payment_tenant_deposit_charge_id', 'tenant_deposit_charge_id');
    }

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'tenant_deposit_charge_payment_method', 'payment_method_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_payment_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_payment_updated_by', 'employee_id');
    }
}
