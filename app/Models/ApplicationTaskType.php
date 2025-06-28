<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationTaskType extends Model
{
    protected $table = 'application_task_type';
    protected $primaryKey = 'application_task_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_task_type_name',
    ];
}
