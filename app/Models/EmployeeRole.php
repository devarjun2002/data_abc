<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeRole extends Model
{
    protected $table = 'employee_role';
    protected $primaryKey = 'employee_role_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'employee_role_name'
    ];

    // Relationships --done
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_to_role', 'employee_role_id', 'employee_id');
    }
    // Reverse Relationships
public function employeeToRoles()
    {
        return $this->hasMany(EmployeeToRole::class, 'employee_role_id', 'employee_role_id');
    }
}