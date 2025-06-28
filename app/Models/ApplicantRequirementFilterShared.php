<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantRequirementFilterShared extends Model
{
    protected $table = 'applicant_requirement_filter_shared';
    protected $primaryKey = 'applicant_requirement_filter_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'applicant_requirement_filter_name',
        'applicant_requirement_filter_description',
        'applicant_requirement_filter_sort'
    ];
}
