<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationTaskType extends Model
{
    protected $table = 'application_task_type';
    protected $primaryKey = 'application_task_type_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'application_task_type_name',
        'application_task_type_description',
        'application_task_type_sort'
    ];

    // Relationships
    public function tasks(): HasMany
    {
        return $this->hasMany(ApplicationTask::class, 'application_task_type', 'application_task_type_id');
    }

    public function taskDefaults(): HasMany
    {
        return $this->hasMany(ApplicationTaskDefaults::class, 'application_task_defaults_type', 'application_task_type_id');
    }
}
