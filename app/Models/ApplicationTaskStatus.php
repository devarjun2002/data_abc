<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationTaskStatus extends Model
{
    protected $table = 'application_task_status';
    protected $primaryKey = 'application_task_status_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'application_task_status_name',
        'application_task_status_description',
        'application_task_status_sort'
    ];

    // Relationships
    public function tasks(): HasMany
    {
        return $this->hasMany(ApplicationTask::class, 'application_task_status', 'application_task_status_id');
    }
}
