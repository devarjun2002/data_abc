<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeLoginLog extends Model
{
    protected $table = 'employee_login_log';
    protected $primaryKey = 'employee_login_log_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'employee_login_log_employee_id',
        'employee_login_log_start_date_time',
        'employee_login_log_date_time',
        'employee_login_log_minutes_late',
        'employee_login_log_ip_address',
        'employee_login_log_notes',
        'employee_login_log_active',
        'employee_login_log_date_updated',
        'employee_login_log_updated_by'
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_login_log_employee_id', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_login_log_updated_by', 'employee_id');
    }

    // Scope for active login logs
    public function scopeActive($query)
    {
        return $query->where('employee_login_log_active', true);
    }

    // Scope for inactive login logs
    public function scopeInactive($query)
    {
        return $query->where('employee_login_log_active', false);
    }

    // Accessor for login duration in minutes
    public function getLoginDurationMinutesAttribute(): ?int
    {
        if ($this->employee_login_log_start_date_time && $this->employee_login_log_date_time) {
            return $this->employee_login_log_start_date_time->diffInMinutes($this->employee_login_log_date_time);
        }
        return null;
    }

    // Accessor for login duration in hours
    public function getLoginDurationHoursAttribute(): ?float
    {
        if ($this->employee_login_log_start_date_time && $this->employee_login_log_date_time) {
            return $this->employee_login_log_start_date_time->diffInHours($this->employee_login_log_date_time, true);
        }
        return null;
    }
}
