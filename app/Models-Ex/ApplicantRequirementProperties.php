<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementProperties extends Model
{
    protected $table = 'applicant_requirement_properties';
    protected $primaryKey = 'applicant_requirement_properties_id';
    public $timestamps = false;
    protected $fillable = [];

    public function requirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_properties_requirement_id', 'applicant_requirement_id');
    }
}
