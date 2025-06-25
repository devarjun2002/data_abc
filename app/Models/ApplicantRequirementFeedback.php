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
    
    protected $fillable = [
        'applicant_requirement_feedback_requirement_id',
        'applicant_requirement_feedback_notes',
        'applicant_requirement_feedback_date_created',
        'applicant_requirement_feedback_created_by'
    ];

    // Relationships
    public function requirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_feedback_requirement_id', 'applicant_requirement_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_feedback_created_by', 'employee_id');
    }
}
