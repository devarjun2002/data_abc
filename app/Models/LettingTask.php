<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tenancy;
use App\Models\LettingTaskStage;
use App\Models\LettingTaskStatus;

class LettingTask extends Model
{
    protected $table = 'letting_task';
    protected $primaryKey = 'letting_task_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'letting_task_date_completed' => 'datetime',
    ];

    protected $fillable = [
        'tenancy_id',
        'letting_task_stage',
        'letting_task_name',
        'letting_task_status',
        'letting_task_notes',
        'letting_task_date_completed',
        'letting_task_sort',
    ];

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }

    public function lettingTaskStage()
    {
        return $this->belongsTo(LettingTaskStage::class, 'letting_task_stage', 'letting_task_stage_id');
    }

    public function lettingTaskStatus()
    {
        return $this->belongsTo(LettingTaskStatus::class, 'letting_task_status', 'letting_task_status_id');
    }
}
