<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementFilterShared extends Model
{
    protected $table = 'applicant_requirement_filter_shared';
    protected $primaryKey = 'applicant_requirement_filter_id';
    public $timestamps = false;
    protected $fillable = [];
}
