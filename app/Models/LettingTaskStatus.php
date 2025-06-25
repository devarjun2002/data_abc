<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LettingTaskStatus extends Model
{
    use HasFactory;

    protected $table = 'letting_task_status';
    protected $primaryKey = 'letting_task_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'letting_task_status_name',
    ];

    public function lettingTasks()
    {
        return $this->hasMany(LettingTask::class, 'letting_task_status', 'letting_task_status_id');
    }
}
