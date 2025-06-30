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
    // Reverse Relationships
public function applicantRequirements()
    {
        return $this->hasMany(ApplicantRequirement::class, 'ar_property_student', 'applicant_requirement_filter_id');
    }
}