<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LettingTaskStatus extends Model
{
    use HasFactory;

    protected $table = 'letting_task_status';
    protected $primaryKey = 'letting_task_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'letting_task_status_name',
    ];

    // Relationships --done
    public function lettingTasks(): HasMany
    {
        return $this->hasMany(LettingTask::class, 'letting_task_status', 'letting_task_status_id');
    }
}
