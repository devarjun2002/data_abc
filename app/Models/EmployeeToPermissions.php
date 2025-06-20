<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeToPermissions extends Model
{
    protected $table = 'employee_to_permissions';
    protected $primaryKey = 'employee_to_permissions_id';
    public $timestamps = false;
    protected $fillable = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
    public function permission()
    {
        return $this->belongsTo(EmployeePermissions::class, 'permission_id', 'permission_id');
    }

    // Reverse relationships for communication
    public function employees()
    {
        return $this->hasMany(Employee::class, 'employee_id', 'employee_id');
    }
    public function permissions()
    {
        return $this->hasMany(EmployeePermissions::class, 'permission_id', 'permission_id');
    }
    // If you want to use many-to-many (pivot) style:
    // public function employeesMany()
    // {
    //     return $this->belongsToMany(Employee::class, 'employee_to_permissions', 'permission_id', 'employee_id');
    // }
    // public function permissionsMany()
    // {
    //     return $this->belongsToMany(EmployeePermissions::class, 'employee_to_permissions', 'employee_id', 'permission_id');
    // }
}
