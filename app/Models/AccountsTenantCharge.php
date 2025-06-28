<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsTenantCharge extends Model
{
    protected $table = 'accounts_tenant_charge';
    protected $primaryKey = 'tenant_charge_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'tenant_charge_date' => 'datetime',
        'tenant_charge_date_created' => 'datetime',
        'tenant_charge_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'tenant_charge_token',
        'tenant_charge_date',
        'tenant_charge_payment_terms',
        'tenant_charge_due_date',
        'tenant_charge_tenancy_id',
        'tenant_charge_notes',
        'tenant_charge_total_amount_exc_vat',
        'tenant_charge_total_vat_amount',
        'tenant_charge_total_amount_paid',
        'tenant_charge_branch',
        'tenant_charge_date_created',
        'tenant_charge_date_updated',
        'tenant_charge_created_by',
        'tenant_charge_updated_by'
    ];

    // Relationships --done
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'tenant_charge_branch', 'branch_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_created_by', 'employee_id');
    }

    public function paymentTerms(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'tenant_charge_payment_terms', 'accounts_payment_term_id');
    }

    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenant_charge_tenancy_id', 'tenancy_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_updated_by', 'employee_id');
    }


    // Reverse relationships
    public function tenantChargePayments(): HasMany
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'tenant_charge_payment_id', 'tenant_charge_id');
    }

    public function tenantDepositCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantDepositCharge::class, 'tenant_deposit_charge_id', 'tenant_charge_id');
    }
}
