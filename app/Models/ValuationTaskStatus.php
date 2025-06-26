<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationTaskStatus extends Model
{
    protected $table = 'valuation_task_status';
    protected $primaryKey = 'valuation_task_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'valuation_task_status_name',
    ];
}
