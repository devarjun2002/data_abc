<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantRequirementSuburb extends Model
{
    protected $table = 'applicant_requirement_suburb';
    protected $primaryKey = 'applicant_requirement_suburb_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'applicant_requirement_suburb_requirement_id',
        'applicant_requirement_suburb_suburb_id',
        'applicant_requirement_suburb_notes',
        'applicant_requirement_suburb_date_created',
        'applicant_requirement_suburb_created_by'
    ];

    // Relationships
    public function requirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_suburb_requirement_id', 'applicant_requirement_id');
    }

    public function suburb(): BelongsTo
    {
        return $this->belongsTo(Suburb::class, 'applicant_requirement_suburb_suburb_id', 'suburb_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_suburb_created_by', 'employee_id');
    }
}
