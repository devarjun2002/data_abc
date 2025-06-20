<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantCharge extends Model
{
    protected $table = 'accounts_tenant_charge';
    protected $primaryKey = 'tenant_charge_id';
    public $timestamps = false;

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

    protected $casts = [
        'tenant_charge_total_amount_exc_vat' => 'decimal:2',
        'tenant_charge_total_vat_amount' => 'decimal:2',
        'tenant_charge_total_amount_paid' => 'decimal:2',
        'tenant_charge_date' => 'date',
        'tenant_charge_due_date' => 'date',
        'tenant_charge_date_created' => 'datetime',
        'tenant_charge_date_updated' => 'datetime'
    ];

    /**
     * Get the tenancy associated with this charge.
     */
    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenant_charge_tenancy_id');
    }

    /**
     * Get the branch associated with this charge.
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'tenant_charge_branch');
    }

    /**
     * Get the payment terms for this charge.
     */
    public function paymentTerms()
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'tenant_charge_payment_terms');
    }

    /**
     * Get the employee who created this charge.
     */
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_created_by');
    }

    /**
     * Get the employee who updated this charge.
     */
    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_updated_by');
    }

    /**
     * Get the lines for this tenant charge.
     */
    public function lines()
    {
        return $this->hasMany(AccountsTenantChargeLine::class, 'tenant_charge_id');
    }

    /**
     * Get the payments for this tenant charge.
     */
    public function payments()
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'tenant_charge_payment_tenant_charge_id');
    }

    /**
     * Get the recurring settings for this tenant charge.
     */
    public function recurring()
    {
        return $this->hasMany(AccountsTenantChargeRecurring::class, 'tenant_charge_recurring_tenant_charge_id');
    }
}
