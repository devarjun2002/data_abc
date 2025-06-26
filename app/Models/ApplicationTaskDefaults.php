<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicationTaskDefaults extends Model
{
    protected $table = 'application_task_defaults';
    protected $primaryKey = 'application_task_defaults_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_task_defaults_type',
        'application_task_defaults_name',
        'application_task_defaults_status',
        'application_task_defaults_notes',
        'application_task_defaults_description',
        'application_task_defaults_sort'
    ];

    public function taskType(): BelongsTo
    {
        return $this->belongsTo(ApplicationTaskType::class, 'application_task_defaults_type', 'application_task_type_id');
    }

    public function taskStatus(): BelongsTo
    {
        return $this->belongsTo(ApplicationTaskStatus::class, 'application_task_defaults_status', 'application_task_status_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_task_defaults_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_task_defaults_updated_by', 'employee_id');
    }
}
