<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeLoginLog extends Model
{
    protected $table = 'employee_login_log';
    protected $primaryKey = 'employee_login_log_id';
    public $timestamps = false;
    protected $fillable = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
}
