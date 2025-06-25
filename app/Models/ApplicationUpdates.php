<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicationUpdates extends Model
{
    protected $table = 'application_updates';
    protected $primaryKey = 'application_updates_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'application_updates_application_id',
        'applicant_updates_applicant_id',
        'application_updates_type',
        'application_updates_description',
        'application_updates_date',
        'application_updates_date_created',
        'application_updates_created_by'
    ];

    // Relationships
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'applicant_updates_applicant_id', 'applicant_id');
    }

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'application_updates_application_id', 'application_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_updates_created_by', 'employee_id');
    }
}
