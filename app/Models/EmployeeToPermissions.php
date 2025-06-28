<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeToPermissions extends Model
{
    protected $table = 'employee_to_permissions';
    protected $primaryKey = 'employee_to_permissions_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'employee_id',
        'employee_permissions_id'
    ];

    // Relationships --done
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    public function permission()
    {
        return $this->belongsTo(EmployeePermissions::class, 'employee_permissions_id', 'employee_permissions_id');
    }
}
