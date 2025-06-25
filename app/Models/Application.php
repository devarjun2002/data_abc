<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    protected $table = 'application';
    protected $primaryKey = 'application_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'application_token',
        'application_property_id',
        'application_status',
        'application_type',
        'application_tenancy_length',
        'application_start_date',
        'application_end_date',
        'application_rent_amount',
        'application_rent_frequency',
        'application_deposit_amount',
        'application_deposit_protection_scheme',
        'application_deposit_protection_responsible',
        'application_branch',
        'application_notes',
        'application_date_created',
        'application_date_updated',
        'application_created_by',
        'application_updated_by'
    ];

    // Relationships
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'application_property_id', 'property_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(ApplicationStatus::class, 'application_status', 'application_status_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ApplicationType::class, 'application_type', 'application_type_id');
    }

    public function tenancyLength(): BelongsTo
    {
        return $this->belongsTo(ApplicationTenancyLength::class, 'application_tenancy_length', 'application_tenancy_length_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'application_branch', 'branch_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_updated_by', 'employee_id');
    }

    public function applicants(): HasMany
    {
        return $this->hasMany(ApplicationApplicant::class, 'application_id', 'application_id');
    }

    public function guarantors(): HasMany
    {
        return $this->hasMany(ApplicationGuarantor::class, 'application_id', 'application_id');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(ApplicationTask::class, 'application_id', 'application_id');
    }

    public function updates(): HasMany
    {
        return $this->hasMany(ApplicationUpdates::class, 'application_updates_application_id', 'application_id');
    }
}
