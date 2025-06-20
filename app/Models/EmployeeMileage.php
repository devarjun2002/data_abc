<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeMileage extends Model
{
    protected $table = 'employee_mileage';
    protected $primaryKey = 'employee_mileage_id';
    public $timestamps = false;
    protected $fillable = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
}
