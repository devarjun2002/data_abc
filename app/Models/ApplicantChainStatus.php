<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantChainStatus extends Model
{
    protected $table = 'applicant_chain_status';
    protected $primaryKey = 'applicant_chain_status_id';
    public $timestamps = false;
    protected $fillable = [];

    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'applicant_chain_status_id', 'applicant_chain_status_id');
    }
}
