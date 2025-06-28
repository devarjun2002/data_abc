<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantDepositCharge extends Model
{
    protected $table = 'accounts_tenant_deposit_charge';
    protected $primaryKey = 'tenant_deposit_charge_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'tenant_deposit_charge_date' => 'datetime',
        'tenant_deposit_charge_date_created' => 'datetime',
        'tenant_deposit_charge_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'tenant_deposit_charge_token',
        'tenant_deposit_charge_date',
        'tenant_deposit_charge_payment_terms',
        'tenant_deposit_charge_due_date',
        'tenant_deposit_charge_amount',
        'tenant_deposit_charge_total_amount_paid',
        'tenant_deposit_charge_tenancy_id',
        'tenant_deposit_charge_notes',
        'tenant_deposit_charge_branch',
        'tenant_deposit_charge_date_created',
        'tenant_deposit_charge_date_updated',
        'tenant_deposit_charge_created_by',
        'tenant_deposit_charge_updated_by'
    ];

    // Relationships --done
    public function paymentTerms()
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'tenant_deposit_charge_payment_terms', 'accounts_payment_term_id');
    }

    public function tenancy() 
    {
        return $this->belongsTo(Tenancy::class, 'tenant_deposit_charge_tenancy_id', 'tenancy_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'tenant_deposit_charge_branch', 'branch_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_updated_by', 'employee_id');
    }

    // Reverse relationships
    public function payments()
    {
        return $this->hasMany(AccountsTenantDepositChargePayment::class, 'tenant_deposit_charge_payment_tenant_deposit_charge_id', 'tenant_deposit_charge_id');
    }
}
