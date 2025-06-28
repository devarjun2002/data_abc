<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    // Relationships --done
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'development_branch', 'branch_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'development_country', 'country_id');
    }

    public function gscContractor()
    {
        return $this->belongsTo(Directory::class, 'development_default_gsc_contractor', 'directory_id');
    }

    public function epcContractor()
    {
        return $this->belongsTo(Directory::class, 'development_default_epc_contractor', 'directory_id');
    }

    public function electricalContractor()
    {
        return $this->belongsTo(Directory::class, 'development_default_electrical_contractor', 'directory_id');
    }

    public function patContractor()
    {
        return $this->belongsTo(Directory::class, 'development_default_pat_contractor', 'directory_id');
    }

    public function fireAlarmContractor()
    {
        return $this->belongsTo(Directory::class, 'development_default_fire_alarm_contractor', 'directory_id');
    }

    public function emergencyLightingContractor()
    {
        return $this->belongsTo(Directory::class, 'development_default_emergency_lighting_contractor', 'directory_id');
    }

    public function developmentType()
    {
        return $this->belongsTo(DevelopmentType::class, 'development_type', 'development_type_id');
    }
}
