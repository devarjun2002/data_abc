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

    protected $casts = [
        'application_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'application_updates_application_id',
        'application_updates_public_notes',
        'application_updates_private_notes',
        'application_updates_notify_landlord',
        'application_updates_notify_applicant',
        'application_updates_date_created',
        'application_updates_created_by'
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'application_updates_application_id', 'application_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_updates_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_updates_updated_by', 'employee_id');
    }
}
