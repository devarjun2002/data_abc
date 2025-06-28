<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantChargeRecurring extends Model
{
    protected $table = 'accounts_tenant_charge_recurring';
    protected $primaryKey = 'tenant_charge_recurring_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'tenant_charge_recurring_start_date' => 'datetime',
        'tenant_charge_recurring_end_date' => 'datetime',
        'tenant_charge_recurring_next_processing_date' => 'datetime',
    ];

    protected $fillable = [
        'tenant_charge_recurring_tenant_charge_id',
        'tenant_charge_recurring_tenancy_id',
        'tenant_charge_recurring_frequency',
        'tenant_charge_recurring_frequency_unit',
        'tenant_charge_recurring_start_date',
        'tenant_charge_recurring_end_date',
        'tenant_charge_recurring_next_processing_date',
        'tenant_charge_recurring_suspended',
        'tenant_charge_recurring_date_created',
        'tenant_charge_recurring_date_updated',
        'tenant_charge_recurring_created_by',
        'tenant_charge_recurring_updated_by'
    ];

    // Relationships --done
    public function tenantCharge()
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_recurring_tenant_charge_id', 'tenant_charge_id');
    }

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenant_charge_recurring_tenancy_id', 'tenancy_id');
    }

    public function frequencyUnit()
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'tenant_charge_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_recurring_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_recurring_updated_by', 'employee_id');
    }

    // Reverse relationships
    public function tenantChargePayments()
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'tenant_charge_payment_id', 'tenant_charge_id');
    }
}
