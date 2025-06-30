<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeDepartment extends Model
{
    protected $table = 'employee_department';
    protected $primaryKey = 'employee_department_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'employee_department_name',
        'employee_department_name2'
    ];
    // Reverse Relationships
public function employeeToDepartments()
    {
        return $this->hasMany(EmployeeToDepartment::class, 'employee_department_id', 'employee_department_id');
    }
}