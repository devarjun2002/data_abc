<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeToRole extends Model
{
    protected $table = 'employee_to_role';
    protected $primaryKey = 'employee_to_role_id';
    public $timestamps = false;
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
    public function role()
    {
        return $this->belongsTo(EmployeeRole::class, 'role_id', 'role_id');
    }
}
