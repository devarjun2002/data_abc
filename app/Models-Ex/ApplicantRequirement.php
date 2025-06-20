<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirement extends Model
{
    protected $table = 'applicant_requirement';
    protected $primaryKey = 'applicant_requirement_id';
    public $timestamps = false;
    protected $fillable = [];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_requirement_applicant_id', 'applicant_id');
    }

    public function propertySubtypes()
    {
        return $this->hasMany(ApplicantRequirementPropertySubtype::class, 'applicant_requirement_property_subtype_requirement_id', 'applicant_requirement_id');
    }
    public function suburbs()
    {
        return $this->hasMany(ApplicantRequirementSuburb::class, 'applicant_requirement_suburb_requirement_id', 'applicant_requirement_id');
    }
    public function properties()
    {
        return $this->hasMany(ApplicantRequirementProperties::class, 'applicant_requirement_properties_requirement_id', 'applicant_requirement_id');
    }
    public function feedbacks()
    {
        return $this->hasMany(ApplicantRequirementFeedback::class, 'applicant_requirement_feedback_requirement_id', 'applicant_requirement_id');
    }
    public function filterStudents()
    {
        return $this->hasMany(ApplicantRequirementFilterStudent::class, 'applicant_requirement_filter_student_requirement_id', 'applicant_requirement_id');
    }
    public function filterShareds()
    {
        return $this->hasMany(ApplicantRequirementFilterShared::class, 'applicant_requirement_filter_shared_requirement_id', 'applicant_requirement_id');
    }
}
