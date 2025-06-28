<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    protected $primaryKey = 'task_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'task_date_tbc' => 'datetime',
        'task_deadline' => 'datetime',
        'task_date_created' => 'datetime',
    ];

    protected $fillable = [
        'task_description',
        'task_date_tbc',
        'task_deadline',
        'task_routine',
        'task_status',
        'task_sort',
        'task_date_created',
        'task_created_by'
    ];

    // Relationships --done
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'task_created_by', 'employee_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(TaskStatus::class, 'task_status', 'task_status_id');
    }
}
