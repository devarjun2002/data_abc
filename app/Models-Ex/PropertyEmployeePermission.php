<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyEmployeePermission extends Model
{
    protected $table = 'property_employee_permission';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['permission', 'is_primary'];

    // If you add property_id and employee_id columns, enable these relationships:
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_employee_permission', 'id', 'property_id');
    }
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'property_employee_permission', 'id', 'employee_id');
    }
}
