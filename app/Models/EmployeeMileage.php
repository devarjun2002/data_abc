<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeMileage extends Model
{
    protected $table = 'employee_mileage';
    protected $primaryKey = 'employee_mileage_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'employee_mileage_employee_id',
        'employee_mileage_vehicle_id',
        'employee_mileage_journey_date',
        'employee_mileage_start_postcode',
        'employee_mileage_end_postcode',
        'employee_mileage_mileage',
        'employee_mileage_notes',
        'employee_mileage_date_created',
        'employee_mileage_created_by'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
}
