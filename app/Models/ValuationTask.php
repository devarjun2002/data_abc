<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationTask extends Model
{
    protected $table = 'valuation_task';
    protected $primaryKey = 'valuation_task_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'valuation_task_date_updated' => 'datetime',
        'valuation_task_completed_date' => 'datetime',
    ];

    protected $fillable = [
        'valuation_id',
        'valuation_task_name',
        'valuation_task_status',
        'valuation_task_completed_date',
        'valuation_task_notes_private',
        'valuation_task_sort',
        'valuation_task_date_updated',
        'valuation_task_updated_by'
    ];

    public function valuation()
    {
        return $this->belongsTo(Valuation::class, 'valuation_id', 'valuation_id');
    }

    public function valuation_task_status_old()
    {
        return $this->belongsTo(ValuationTaskStatus::class, 'valuation_task_status_old', 'valuation_task_status_id');
    }

    public function valuation_task_status()
    {
        return $this->belongsTo(ValuationTaskStatus::class, 'valuation_task_status_new', 'valuation_task_status_id');
    }
    
    public function valuation_task_updated_by()
    {
        return $this->belongsTo(Employee::class, 'valuation_task_updated_by', 'employee_id');
    }
}
