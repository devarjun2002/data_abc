<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleTaskDefaults extends Model
{
    protected $table = 'sale_task_defaults';
    protected $primaryKey = 'sale_task_defaults_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'sale_task_defaults_type',
        'sale_task_defaults_name',
        'sale_task_defaults_status',
        'sale_task_defaults_notes',
        'sale_task_defaults_description',
        'sale_task_defaults_sort'
    ];

    public function type(): BelongsTo {
        return $this->belongsTo(SaleTaskType::class, 'sale_task_defaults_type', 'sale_task_type_id');
    }

    public function status(): BelongsTo {
        return $this->belongsTo(SaleTaskStatus::class, 'sale_task_defaults_status', 'sale_task_status_id');
    }
}
