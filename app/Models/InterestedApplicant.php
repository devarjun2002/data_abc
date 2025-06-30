<?php

namespace App\Models;
use App\Models\Applicant;
use App\Models\Employee;
use App\Models\Property;

use Illuminate\Database\Eloquent\Model;

class InterestedApplicant extends Model
{
    protected $table = 'interested_applicant';
    protected $primaryKey = 'interested_applicant_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'interested_applicant_date_created' => 'datetime',
        'interested_applicant_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'interested_applicant_applicant_id',
        'interested_applicant_property',
        'interested_applicant_notes',
        'interested_applicant_status',
        'interested_applicant_status_reason',
        'interested_applicant_date_created',
        'interested_applicant_date_updated',
        'interested_applicant_created_by',
        'interested_applicant_updated_by'
    ];

    // Relationships --done
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'interested_applicant_applicant_id', 'applicant_id');
    }

    public function baseApplicant()
    {
        return $this->belongsTo(Applicant::class, 'interested_applicant_id', 'applicant_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_updated_by', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'interested_applicant_property', 'property_id');
    }
    // Reverse Relationships
public function interestedApplicantUpdateses()
    {
        return $this->hasMany(InterestedApplicantUpdates::class, 'interested_applicant_updates_interested_applicant_id', 'interested_applicant_id');
    }
}