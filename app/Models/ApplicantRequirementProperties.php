<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantRequirementProperties extends Model
{
    protected $table = 'applicant_requirement_properties';
    protected $primaryKey = 'applicant_requirement_properties_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'applicant_requirement_properties_requirement_id',
        'applicant_requirement_properties_property_id',
        'applicant_requirement_properties_notes',
        'applicant_requirement_properties_date_created',
        'applicant_requirement_properties_created_by'
    ];

    // Relationships
    public function requirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_properties_requirement_id', 'applicant_requirement_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'applicant_requirement_properties_property_id', 'property_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_properties_created_by', 'employee_id');
    }
}
