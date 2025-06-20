<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationTaskStatus extends Model
{
    protected $table = 'application_task_status';
    protected $primaryKey = 'application_task_status_id';
    public $timestamps = false;
    protected $fillable = [];

    public function tasks()
    {
        return $this->hasMany(ApplicationTask::class, 'application_task_status', 'application_task_status_id');
    }
}
