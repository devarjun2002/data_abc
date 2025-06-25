<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantRequirementPropertySubtype extends Model
{
    protected $table = 'applicant_requirement_property_subtype';
    protected $primaryKey = 'applicant_requirement_property_subtype_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'applicant_requirement_property_subtype_requirement_id',
        'applicant_requirement_property_subtype_type_id',
        'applicant_requirement_property_subtype_notes',
        'applicant_requirement_property_subtype_date_created',
        'applicant_requirement_property_subtype_created_by'
    ];

    // Relationships
    public function requirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_property_subtype_requirement_id', 'applicant_requirement_id');
    }

    public function propertySubtype(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'applicant_requirement_property_subtype_type_id', 'property_type_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_property_subtype_created_by', 'employee_id');
    }
}
