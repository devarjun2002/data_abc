<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicationTask extends Model
{
    protected $table = 'application_task';
    protected $primaryKey = 'application_task_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'application_id',
        'application_task_type',
        'application_task_status',
        'application_task_name',
        'application_task_description',
        'application_task_due_date',
        'application_task_completed_date',
        'application_task_notes',
        'application_task_date_created',
        'application_task_date_updated',
        'application_task_created_by',
        'application_task_updated_by'
    ];

    // Relationships
    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'application_id', 'application_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(ApplicationTaskStatus::class, 'application_task_status', 'application_task_status_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ApplicationTaskType::class, 'application_task_type', 'application_task_type_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_task_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_task_updated_by', 'employee_id');
    }
}
