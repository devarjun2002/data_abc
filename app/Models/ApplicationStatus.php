<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationStatus extends Model
{
    protected $table = 'application_status';
    protected $primaryKey = 'application_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_status_name',
        'application_status_sort',
        'application_status_archived'
    ];

    // Relationships --done
    public function applications()
    {
        return $this->hasMany(Application::class, 'application_status', 'application_status_id');
    }
    // Reverse Relationships
public function applicationLogStatuses()
    {
        return $this->hasMany(ApplicationLogStatus::class, 'application_status_new', 'application_status_id');
    }
}