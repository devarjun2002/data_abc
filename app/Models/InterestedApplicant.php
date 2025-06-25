<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InterestedApplicant extends Model
{
    protected $table = 'interested_applicant';
    protected $primaryKey = 'interested_applicant_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'interested_applicant_applicant_id',
        'interested_applicant_property_id',
        'interested_applicant_notes',
        'interested_applicant_status',
        'interested_applicant_status_reason',
        'interested_applicant_date_created',
        'interested_applicant_date_updated',
        'interested_applicant_created_by',
        'interested_applicant_updated_by'
    ];

    // Relationships
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'interested_applicant_applicant_id', 'applicant_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'interested_applicant_property_id', 'property_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_updated_by', 'employee_id');
    }

    public function updates(): HasMany
    {
        return $this->hasMany(InterestedApplicantUpdates::class, 'interested_applicant_updates_interested_applicant_id', 'interested_applicant_id');
    }
}
