<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    // Reverse Relationships
public function applicationTaskDefaultses()
    {
        return $this->hasMany(ApplicationTaskDefaults::class, 'application_task_defaults_type', 'application_task_type_id');
    }
}