<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantUpdates extends Model
{
    protected $table = 'applicant_updates';
    protected $primaryKey = 'applicant_updates_id';
    public $timestamps = false;
    protected $fillable = [];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_updates_applicant_id', 'applicant_id');
    }
}
