<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicantRequirement extends Model
{
    protected $table = 'applicant_requirement';
    protected $primaryKey = 'applicant_requirement_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'applicant_requirement_applicant_id',
        'applicant_requirement_type',
        'applicant_requirement_status',
        'applicant_requirement_notes',
        'applicant_requirement_date_created',
        'applicant_requirement_date_updated',
        'applicant_requirement_created_by',
        'applicant_requirement_updated_by'
    ];

    // Relationships
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'applicant_requirement_applicant_id', 'applicant_id');
    }

    public function propertySubtypes(): HasMany
    {
        return $this->hasMany(ApplicantRequirementPropertySubtype::class, 'applicant_requirement_property_subtype_requirement_id', 'applicant_requirement_id');
    }
    public function suburbs(): HasMany
    {
        return $this->hasMany(ApplicantRequirementSuburb::class, 'applicant_requirement_suburb_requirement_id', 'applicant_requirement_id');
    }
    public function properties(): HasMany
    {
        return $this->hasMany(ApplicantRequirementProperties::class, 'applicant_requirement_properties_requirement_id', 'applicant_requirement_id');
    }
    public function feedbacks(): HasMany
    {
        return $this->hasMany(ApplicantRequirementFeedback::class, 'applicant_requirement_feedback_requirement_id', 'applicant_requirement_id');
    }
    public function filterStudents(): HasMany
    {
        return $this->hasMany(ApplicantRequirementFilterStudent::class, 'applicant_requirement_filter_student_requirement_id', 'applicant_requirement_id');
    }
    public function filterShareds(): HasMany
    {
        return $this->hasMany(ApplicantRequirementFilterShared::class, 'applicant_requirement_filter_shared_requirement_id', 'applicant_requirement_id');
    }
}
