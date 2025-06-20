<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'vehicle_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_registration',
        'vehicle_make_model',
        'vehicle_archived',
    ];

    /**
     * Get the employees that use this vehicle as their default.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class, 'employee_default_vehicle_id');
    }
}
