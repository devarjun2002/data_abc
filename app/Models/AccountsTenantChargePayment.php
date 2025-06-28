<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsTenantChargePayment extends Model
{
    protected $table = 'accounts_tenant_charge_payment';
    protected $primaryKey = 'tenant_charge_payment_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'tenant_charge_payment_date' => 'datetime',
        'tenant_charge_payment_date_created' => 'datetime',
        'tenant_charge_payment_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'tenant_charge_payment_date',
        'tenant_charge_payment_amount',
        'tenant_charge_payment_method',
        'tenant_charge_payment_tenant_charge_id',
        'tenant_charge_payment_notes',
        'accounts_tenant_charge_payment_type',
        'tenant_charge_housing_benefit',
        'tenant_charge_payment_date_created',
        'tenant_charge_payment_date_updated',
        'tenant_charge_payment_created_by',
        'tenant_charge_payment_updated_by'
    ];

    // Relationships --done
    public function paymentType(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantChargePaymentType::class, 'accounts_tenant_charge_payment_type', 'accounts_tenant_charge_payment_type_id');
    }

    public function tenantCharge(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_payment_tenant_charge_id', 'tenant_charge_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_payment_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_payment_updated_by', 'employee_id');
    }

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'tenant_charge_payment_method', 'payment_method_id');
    }
}
