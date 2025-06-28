<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicantLeadSource extends Model
{
    protected $table = 'applicant_lead_source';
    protected $primaryKey = 'applicant_lead_source_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'applicant_lead_source_name',
    ];

    // Relationships --done
    public function applicants(): HasMany
    {
        return $this->hasMany(Applicant::class, 'applicant_lead_source', 'applicant_lead_source_id');
    }
}
