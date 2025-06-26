<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function applicantRequirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_feedback_ar_id', 'applicant_requirement_id');
    }

    public function applicantRequirementProperty(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirementProperty::class, 'applicant_requirement_feedback_arp_id', 'applicant_requirement_property_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_feedback_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_feedback_updated_by', 'employee_id');
    }
}
