<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementFeedback extends Model
{
    protected $table = 'applicant_requirement_feedback';
    protected $primaryKey = 'applicant_requirement_feedback_id';
    public $timestamps = false;
    protected $fillable = [];

    public function requirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_feedback_requirement_id', 'applicant_requirement_id');
    }
}
