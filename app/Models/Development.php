<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Development extends Model
{
    protected $table = 'development';
    protected $primaryKey = 'development_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'development_token',
        'development_branch',
        'development_name',
        'development_number_name',
        'development_address_line_1',
        'development_address_line_2',
        'development_suburb',
        'development_town_city',
        'development_postcode',
        'development_country',
        'development_default_gsc_contractor',
        'development_default_epc_contractor',
        'development_default_electrical_contractor',
        'development_default_pat_contractor',
        'development_default_fire_alarm_contractor',
        'development_default_emergency_lighting_contractor',
        'development_type',
        'development_requires_gas_cert',
        'development_requires_electric_cert',
        'development_requires_fire_alarm_cert',
        'development_requires_emergency_lighting_cert',
        'development_requires_fire_risk_assessment',
        'development_works_notes',
        'development_window_cleaning_public',
        'development_window_cleaning_private',
        'development_grounds_maintenance_public',
        'development_grounds_maintenance_private',
        'development_cleaning_public',
        'development_cleaning_private',
        'development_heating_public',
        'development_heating_private',
        'development_internet_public',
        'development_internet_private',
        'development_fire_alarm_public',
        'development_fire_alarm_private',
        'development_waste_public',
        'development_waste_private',
        'development_general_public',
        'development_general_private',
        'development_status'
    ];

    // Relationships
    public function type(): BelongsTo
    {
        return $this->belongsTo(DevelopmentType::class, 'development_type', 'development_type_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'development_country', 'country_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'development_branch', 'branch_id');
    }

    public function defaultGscContractor(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'development_default_gsc_contractor', 'directory_individual_id');
    }

    public function defaultEpcContractor(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'development_default_epc_contractor', 'directory_individual_id');
    }

    public function defaultElectricalContractor(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'development_default_electrical_contractor', 'directory_individual_id');
    }

    public function defaultPatContractor(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'development_default_pat_contractor', 'directory_individual_id');
    }

    public function defaultFireAlarmContractor(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'development_default_fire_alarm_contractor', 'directory_individual_id');
    }

    public function defaultEmergencyLightingContractor(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'development_default_emergency_lighting_contractor', 'directory_individual_id');
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_development_id', 'development_id');
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(CertificateDevelopment::class, 'certificate_development', 'development_id');
    }

    public function updates(): HasMany
    {
        return $this->hasMany(DevelopmentUpdates::class, 'development_updates_development_id', 'development_id');
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_development_id', 'development_id');
    }

    public function invoiceCredits(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_development_id', 'development_id');
    }
}
