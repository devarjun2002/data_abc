<?php

namespace App\Models;

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

    // Relationships --done
    public function requirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_suburb_requirement_id', 'applicant_requirement_id');
    }

    public function suburb()
    {
        return $this->belongsTo(Suburb::class, 'applicant_requirement_suburb_suburb_id', 'suburb_id');
    }
}
