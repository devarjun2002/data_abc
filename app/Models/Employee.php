<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;
    protected $fillable = [];

    public function permissions()
    {
        return $this->belongsToMany(EmployeePermissions::class, 'employee_to_permissions', 'employee_id', 'employee_permissions_id');
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_employee', 'employee_id', 'property_id');
    }

    public function roles()
    {
        return $this->belongsToMany(PropertyEmployeeRole::class, 'property_employee_role', 'employee_id', 'role_id');
    }

    public function loginLogs()
    {
        return $this->hasMany(EmployeeLoginLog::class, 'employee_id', 'employee_id');
    }
    public function mileage()
    {
        return $this->hasMany(EmployeeMileage::class, 'employee_id', 'employee_id');
    }
    public function toPermissions()
    {
        return $this->hasMany(EmployeeToPermissions::class, 'employee_id', 'employee_id');
    }
}
