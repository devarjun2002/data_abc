<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementSuburb extends Model
{
    protected $table = 'applicant_requirement_suburb';
    protected $primaryKey = 'applicant_requirement_suburb_id';
    public $timestamps = false;
    protected $fillable = [];

    public function requirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_suburb_requirement_id', 'applicant_requirement_id');
    }
}
