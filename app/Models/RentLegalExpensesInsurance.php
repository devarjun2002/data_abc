<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Property;
use App\Models\PropertyRoomLetting;
use App\Models\RentLegalExpensesInsuranceStatus;
use App\Models\RentLegalExpensesInsuranceType;
use App\Models\Tenancy;
use App\Models\TenancyFixedTermUnit;

use Illuminate\Database\Eloquent\Model;

class RentLegalExpensesInsurance extends Model
{
    protected $table = 'rent_legal_expenses_insurance';
    protected $primaryKey = 'rlei_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'rlei_policy_start_date' => 'datetime',
        'rlei_policy_end_date' => 'datetime',
        'rlei_date_created' => 'datetime',
        'rlei_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'rlei_policy_type',
        'rlei_tenancy_id',
        'rlei_property_id',
        'rlei_room_id',
        'rlei_policy_ref',
        'rlei_policy_start_date',
        'rlei_policy_end_date',
        'rlei_term',
        'rlei_term_unit',
        'rlei_notes',
        'rlei_status',
        'rlei_date_created',
        'rlei_date_updated',
        'rlei_created_by',
        'rlei_updated_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'rlei_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'rlei_updated_by', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'rlei_property_id', 'property_id');
    }

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'rlei_tenancy_id', 'tenancy_id');
    }

    public function room()
    {
        return $this->belongsTo(PropertyRoomLetting::class, 'rlei_room_id', 'property_room_letting_id');
    }

    public function termUnit()
    {
        return $this->belongsTo(TenancyFixedTermUnit::class, 'rlei_term_unit', 'tenancy_fixed_term_unit_id');
    }

    public function status()
    {
        return $this->belongsTo(RentLegalExpensesInsuranceStatus::class, 'rlei_status', 'rleis_id');
    }

    public function policyType()
    {
        return $this->belongsTo(RentLegalExpensesInsuranceType::class, 'rlei_policy_type', 'rleit_id');
    }
}
