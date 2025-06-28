<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementFeedback extends Model
{
    protected $table = 'applicant_requirement_feedback';
    protected $primaryKey = 'applicant_requirement_feedback_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'applicant_requirement_feedback_date_created' => 'datetime',
        'applicant_requirement_feedback_date_updated' => 'datetime',
        'applicant_requirement_feedback_next_review_date' => 'datetime',
    ];

    protected $fillable = [
        'applicant_requirement_feedback_id',
        'applicant_requirement_feedback_ar_id',
        'applicant_requirement_feedback_arp_id',
        'applicant_requirement_feedback_public_notes',
        'applicant_requirement_feedback_ptp',
        'applicant_requirement_feedback_private_notes',
        'applicant_requirement_feedback_next_review_date',
        'applicant_requirement_feedback_date_created',
        'applicant_requirement_feedback_date_updated',
        'applicant_requirement_feedback_created_by',
        'applicant_requirement_feedback_updated_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_feedback_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_feedback_updated_by', 'employee_id');
    }

    public function applicantRequirementProperty()
    {
        return $this->belongsTo(ApplicantRequirementProperties::class, 'applicant_requirement_feedback_arp_id', 'arp_id');
    }

    public function applicantRequirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_feedback_ar_id', 'ar_id');
    }
}
