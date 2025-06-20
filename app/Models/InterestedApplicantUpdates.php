<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterestedApplicantUpdates extends Model
{
    protected $table = 'interested_applicant_updates';
    protected $primaryKey = 'interested_applicant_updates_id';
    public $timestamps = false;
    protected $fillable = [];

    public function interestedApplicant()
    {
        return $this->belongsTo(InterestedApplicant::class, 'interested_applicant_updates_interested_applicant_id', 'interested_applicant_id');
    }
}
