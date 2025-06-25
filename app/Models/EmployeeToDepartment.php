<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeToDepartment extends Model
{
    protected $table = 'employee_to_department';
    protected $primaryKey = 'employee_to_department_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'employee_id',
        'employee_department_id'
    ];

    // Relationships
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(EmployeeDepartment::class, 'employee_department_id', 'employee_department_id');
    }
}
