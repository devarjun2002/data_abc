<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationTask extends Model
{
    protected $table = 'application_task';
    protected $primaryKey = 'application_task_id';
    public $timestamps = false;
    protected $fillable = [];

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id', 'application_id');
    }
    public function status()
    {
        return $this->belongsTo(ApplicationTaskStatus::class, 'application_task_status', 'application_task_status_id');
    }
    public function type()
    {
        return $this->belongsTo(ApplicationTaskType::class, 'application_task_type', 'application_task_type_id');
    }
}
