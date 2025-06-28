<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleTask extends Model
{
    protected $table = 'sale_task';
    protected $primaryKey = 'sale_task_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'sale_task_target_date' => 'datetime',
        'sale_task_completed_date' => 'datetime',
        'sale_task_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'sale_id',
        'sale_task_type',
        'sale_task_name',
        'sale_task_status',
        'sale_task_target_date',
        'sale_task_completed_date',
        'sale_task_notes',
        'sale_task_notes_private',
        'sale_task_sort',
        'sale_task_vendor_notified',
        'sale_task_buyer_notified',
        'sale_task_date_updated',
        'sale_task_updated_by'
    ];

    // Relationships --done
    public function sale() {
        return $this->belongsTo(Sale::class, 'sale_id', 'sale_id');
    }

    public function type() {
        return $this->belongsTo(SaleTaskType::class, 'sale_task_type', 'sale_task_type_id');
    }

    public function status() {
        return $this->belongsTo(SaleTaskStatus::class, 'sale_task_status', 'sale_task_status_id');
    }

    public function updatedBy() {
        return $this->belongsTo(Employee::class, 'sale_task_updated_by', 'employee_id');
    }
}
