<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleTaskType extends Model
{
    protected $table = 'sale_task_type';
    protected $primaryKey = 'sale_task_type_id';
    public $timestamps = false;
    protected $guarded = [];

    public function saleTasks()
    {
        return $this->hasMany(SaleTask::class, 'sale_task_type_id', 'sale_task_type_id');
    }
}
