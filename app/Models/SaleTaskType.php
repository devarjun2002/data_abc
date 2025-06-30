<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleTaskType extends Model
{
    protected $table = 'sale_task_type';
    protected $primaryKey = 'sale_task_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'sale_task_type_name',
    ];

    // Relationships --done
    public function tasks() {
        return $this->hasMany(SaleTask::class, 'sale_task_type', 'sale_task_type_id');
    }
    // Reverse Relationships
public function saleTaskDefaultses()
    {
        return $this->hasMany(SaleTaskDefaults::class, 'sale_task_defaults_type', 'sale_task_type_id');
    }
}