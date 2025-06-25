<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SaleTaskType extends Model
{
    protected $table = 'sale_task_type';
    protected $primaryKey = 'sale_task_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'sale_task_type_name',
    ];

    public function tasks(): HasMany {
        return $this->hasMany(SaleTask::class, 'sale_task_type', 'sale_task_type_id');
    }
}
