<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeePermissions extends Model
{
    protected $table = 'employee_permissions';
    protected $primaryKey = 'employee_permissions_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'employee_permissions_name',
        'employee_permissions_category',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_to_permissions', 'employee_permissions_id', 'employee_id');
    }
    public function toPermissions()
    {
        return $this->hasMany(EmployeeToPermissions::class, 'employee_permissions_id', 'employee_permissions_id');
    }
    public function category()
    {
        return $this->belongsTo(EmployeePermissionsCategory::class, 'employee_permissions_category', 'employee_permissions_category_id');
    }
}
