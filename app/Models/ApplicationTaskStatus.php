<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationTaskStatus extends Model
{
    protected $table = 'application_task_status';
    protected $primaryKey = 'application_task_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_task_status_name',
    ];

    public function tasks(): HasMany
    {
        return $this->hasMany(ApplicationTask::class, 'application_task_status', 'application_task_status_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_task_status_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_task_status_updated_by', 'employee_id');
    }
}
