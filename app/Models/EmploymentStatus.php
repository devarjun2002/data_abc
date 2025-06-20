<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentStatus extends Model
{
    protected $table = 'employment_status';
    protected $primaryKey = 'employment_status_id';
    public $timestamps = false;
    protected $fillable = ['employment_status_name'];

    public function applicationApplicants()
    {
        return $this->hasMany(ApplicationApplicant::class, 'application_employment_status', 'employment_status_id');
    }
    public function applicationGuarantors()
    {
        return $this->hasMany(ApplicationGuarantor::class, 'application_guarantor_employment_status', 'employment_status_id');
    }
}
