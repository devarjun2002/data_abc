<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyEmployeeRole extends Model
{
    protected $table = 'property_employee_role';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    // Relationships can be added here if needed
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'property_employee_role', 'role_id', 'employee_id');
    }
}
