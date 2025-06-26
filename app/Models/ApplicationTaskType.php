<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationTaskType extends Model
{
    protected $table = 'application_task_type';
    protected $primaryKey = 'application_task_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_task_type_name',
    ];

    public function tasks(): HasMany
    {
        return $this->hasMany(ApplicationTask::class, 'application_task_type', 'application_task_type_id');
    }

    public function taskDefaults(): HasMany
    {
        return $this->hasMany(ApplicationTaskDefaults::class, 'application_task_defaults_type', 'application_task_type_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_task_type_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_task_type_updated_by', 'employee_id');
    }
}
