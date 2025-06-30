<?php

namespace App\Models;
use App\Models\ValuationTaskStatus;

use Illuminate\Database\Eloquent\Model;

class ValuationTaskDefaults extends Model
{
    protected $table = 'valuation_task_defaults';
    protected $primaryKey = 'valuation_task_defaults_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'valuation_task_defaults_name',
        'valuation_task_defaults_type',
        'valuation_task_defaults_status',
        'valuation_task_defaults_notes',
        'valuation_task_defaults_description',
        'valuation_task_defaults_sort'
    ];

    // Relationships --done
    public function valuation_task_defaults_status()
    {
        return $this->belongsTo(ValuationTaskStatus::class, 'valuation_task_defaults_status', 'valuation_task_status_id');
    }
}
