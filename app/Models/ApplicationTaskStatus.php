<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    // Relationships --done
    public function tasks()
    {
        return $this->hasMany(ApplicationTask::class, 'application_task_status', 'application_task_status_id');
    }

    public function taskDefaults()
    {
        return $this->hasMany(ApplicationTaskDefaults::class, 'application_task_defaults_status', 'application_task_status_id');
    }
    // Reverse Relationships
public function applicationTaskDefaultses()
    {
        return $this->hasMany(ApplicationTaskDefaults::class, 'application_task_defaults_status', 'application_task_status_id');
    }
}