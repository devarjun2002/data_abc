<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleTaskDefaults extends Model
{
    protected $table = 'sale_task_defaults';
    protected $primaryKey = 'sale_task_defaults_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'sale_task_defaults_type',
        'sale_task_defaults_name',
        'sale_task_defaults_status',
        'sale_task_defaults_notes',
        'sale_task_defaults_description',
        'sale_task_defaults_sort'
    ];

    // Relationships --done
    public function type() {
        return $this->belongsTo(SaleTaskType::class, 'sale_task_defaults_type', 'sale_task_type_id');
    }

    public function status() {
        return $this->belongsTo(SaleTaskStatus::class, 'sale_task_defaults_status', 'sale_task_status_id');
    }
}
