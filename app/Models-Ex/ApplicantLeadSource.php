<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantLeadSource extends Model
{
    protected $table = 'applicant_lead_source';
    protected $primaryKey = 'applicant_lead_source_id';
    public $timestamps = false;
    protected $fillable = [];

    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'applicant_lead_source_id', 'applicant_lead_source_id');
    }
}
