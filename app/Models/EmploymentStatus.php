<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmploymentStatus extends Model
{
    protected $table = 'employment_status';
    protected $primaryKey = 'employment_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'employment_status_name',
    ];

    // Relationships --done
    public function applicationApplicants(): HasMany
    {
        return $this->hasMany(ApplicationApplicant::class, 'application_employment_status', 'employment_status_id');
    }

    public function applicationGuarantors(): HasMany
    {
        return $this->hasMany(ApplicationGuarantor::class, 'application_guarantor_employment_status', 'employment_status_id');
    }
}
