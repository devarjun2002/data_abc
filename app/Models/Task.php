<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    protected $primaryKey = 'task_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'task_description',
        'task_date_tbc',
        'task_deadline',
        'task_routine',
        'task_status',
        'task_sort',
        'task_date_created',
        'task_created_by'
    ];
}
