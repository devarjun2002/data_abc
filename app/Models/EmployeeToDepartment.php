<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\EmployeeDepartment;

use Illuminate\Database\Eloquent\Model;

class EmployeeToDepartment extends Model
{
    protected $table = 'employee_to_department';
    protected $primaryKey = 'employee_to_department_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'employee_id',
        'employee_department_id'
    ];

    // Relationships --done
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    public function department()
    {
        return $this->belongsTo(EmployeeDepartment::class, 'employee_department_id', 'employee_department_id');
    }
}
