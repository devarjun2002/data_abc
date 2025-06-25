<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InterestedApplicantUpdates extends Model
{
    protected $table = 'interested_applicant_updates';
    protected $primaryKey = 'interested_applicant_updates_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'interested_applicant_updates_interested_applicant_id',
        'interested_applicant_updates_type',
        'interested_applicant_updates_description',
        'interested_applicant_updates_date_created',
        'interested_applicant_updates_created_by'
    ];

    // Relationships
    public function interestedApplicant(): BelongsTo
    {
        return $this->belongsTo(InterestedApplicant::class, 'interested_applicant_updates_interested_applicant_id', 'interested_applicant_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_updates_created_by', 'employee_id');
    }
}
