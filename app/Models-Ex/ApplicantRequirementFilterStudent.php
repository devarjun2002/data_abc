<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementFilterStudent extends Model
{
    protected $table = 'applicant_requirement_filter_student';
    protected $primaryKey = 'applicant_requirement_filter_id';
    public $timestamps = false;
    protected $fillable = [];
}
