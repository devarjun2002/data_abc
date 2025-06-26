<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    // Relationships
    public function tenantCharge(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_recurring_tenant_charge_id', 'tenant_charge_id');
    }

    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenant_charge_recurring_tenancy_id', 'tenancy_id');
    }

    public function frequencyUnit(): BelongsTo
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'tenant_charge_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_recurring_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_recurring_updated_by', 'employee_id');
    }
}
