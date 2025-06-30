<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle';
    protected $primaryKey = 'vehicle_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'vehicle_registration',
        'vehicle_make_model',
        'vehicle_archived',
    ];
    // Reverse Relationships
public function employeeMileages()
    {
        return $this->hasMany(EmployeeMileage::class, 'employee_mileage_vehicle_id', 'vehicle_id');
    }
}