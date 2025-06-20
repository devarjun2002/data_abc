<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationTaskDefaults extends Model
{
    protected $table = 'application_task_defaults';
    protected $primaryKey = 'application_task_defaults_id';
    public $timestamps = false;

    protected $fillable = [
        'application_task_defaults_type',
        'application_task_defaults_name',
        'application_task_defaults_status',
        'application_task_defaults_notes'
    ];

    public function taskType()
    {
        return $this->belongsTo(ApplicationTaskType::class, 'application_task_defaults_type');
    }

    public function taskStatus()
    {
        return $this->belongsTo(ApplicationTaskStatus::class, 'application_task_defaults_status');
    }
}
