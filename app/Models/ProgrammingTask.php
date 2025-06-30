<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\ProgrammingTaskStatus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingTask extends Model
{
    use HasFactory;

    protected $table = 'programming_task';
    protected $primaryKey = 'programming_task_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'programming_task_date_created' => 'datetime',
        'programming_task_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'programming_task_description',
        'programming_task_severity',
        'programming_task_sort',
        'programming_task_status',
        'programming_task_date_created',
        'programming_task_date_updated',
        'programming_task_created_by',
        'programming_task_updated_by',
    ];

    public function status()
    {
        return $this->belongsTo(ProgrammingTaskStatus::class, 'programming_task_status', 'programming_task_status_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'programming_task_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'programming_task_updated_by', 'employee_id');
    }
}
