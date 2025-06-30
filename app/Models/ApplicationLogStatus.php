<?php

namespace App\Models;
use App\Models\Application;
use App\Models\ApplicationStatus;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class ApplicationLogStatus extends Model
{
    protected $table = 'application_log_status';
    protected $primaryKey = 'application_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'application_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'application_id',
        'application_status_old',
        'application_status_new',
        'application_updated_by',
        'application_date_updated'
    ];

    // Relationships --done
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'application_updated_by', 'employee_id');
    }

    public function application() 
    {
        return $this->belongsTo(Application::class, 'application_id', 'applicant_id');
    }

    public function oldStatus()
    {
        return $this->belongsTo(ApplicationStatus::class, 'application_status_old', 'application_status_id');
    }

    public function newStatus()
    {
        return $this->belongsTo(ApplicationStatus::class, 'application_status_new', 'application_status_id'); 
    }
}
