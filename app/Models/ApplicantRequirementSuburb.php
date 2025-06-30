<?php

namespace App\Models;
use App\Models\ApplicantRequirement;
use App\Models\Suburb;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementSuburb extends Model
{
    protected $table = 'applicant_requirement_suburb';
    protected $primaryKey = 'ars_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'ars_id',
        'ar_id',
        'ars_suburb_id',
    ];

    // Relationships
    public function applicantRequirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'ar_id', 'ar_id');
    }

    public function suburb()
    {
        return $this->belongsTo(Suburb::class, 'ars_suburb_id', 'suburb_id');
    }
}
