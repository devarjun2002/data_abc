<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingTaskStatus extends Model
{
    use HasFactory;

    protected $table = 'programming_task_status';
    protected $primaryKey = 'programming_task_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'programming_task_status_name',
        'programming_task_status_sort',
    ];
    // Reverse Relationships
public function programmingTasks()
    {
        return $this->hasMany(ProgrammingTask::class, 'programming_task_status', 'programming_task_status_id');
    }
}