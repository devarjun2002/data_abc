<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleTaskStatus extends Model
{
    protected $table = 'sale_task_status';
    protected $primaryKey = 'sale_task_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'sale_task_status_name',
    ];

    public function tasks() {
        return $this->hasMany(SaleTask::class, 'sale_task_status', 'sale_task_status_id');
    }
    // Reverse Relationships
public function saleTaskDefaultses()
    {
        return $this->hasMany(SaleTaskDefaults::class, 'sale_task_defaults_status', 'sale_task_status_id');
    }
}