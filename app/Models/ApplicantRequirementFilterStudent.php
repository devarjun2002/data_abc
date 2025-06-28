<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementFilterStudent extends Model
{
    protected $table = 'applicant_requirement_filter_student';
    protected $primaryKey = 'applicant_requirement_filter_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'applicant_requirement_filter_name',
        'applicant_requirement_filter_description',
        'applicant_requirement_filter_sort'
    ];

    // Relationships
    public function requirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_filter_student_requirement_id', 'applicant_requirement_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_filter_student_created_by', 'employee_id');
    }
}
