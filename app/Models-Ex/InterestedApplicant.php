<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterestedApplicant extends Model
{
    protected $table = 'interested_applicant';
    protected $primaryKey = 'interested_applicant_id';
    public $timestamps = false;
    protected $fillable = [];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'interested_applicant_applicant_id', 'applicant_id');
    }

    public function updates()
    {
        return $this->hasMany(InterestedApplicantUpdates::class, 'interested_applicant_updates_interested_applicant_id', 'interested_applicant_id');
    }
}
