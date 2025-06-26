<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantUpdates extends Model
{
    protected $table = 'applicant_updates';
    protected $primaryKey = 'applicant_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'applicant_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'applicant_updates_applicant_id',
        'applicant_updates_public_notes',
        'applicant_updates_private_notes',
        'applicant_updates_notify_applicant',
        'applicant_updates_date_created',
        'applicant_updates_created_by'
    ];

    // Relationships
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'applicant_updates_applicant_id', 'applicant_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_updates_created_by', 'employee_id');
    }
}
