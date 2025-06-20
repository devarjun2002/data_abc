<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationTaskType extends Model
{
    protected $table = 'application_task_type';
    protected $primaryKey = 'application_task_type_id';
    public $timestamps = false;
    protected $fillable = [];

    public function tasks()
    {
        return $this->hasMany(ApplicationTask::class, 'application_task_type', 'application_task_type_id');
    }
}
