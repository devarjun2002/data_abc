<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementPropertySubtype extends Model
{
    protected $table = 'applicant_requirement_property_subtype';
    protected $primaryKey = 'applicant_requirement_property_subtype_id';
    public $timestamps = false;
    protected $fillable = [];

    public function requirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_property_subtype_requirement_id', 'applicant_requirement_id');
    }
}
