<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnnualLeaveYears extends Model
{
    protected $table = 'annual_leave_years';
    protected $primaryKey = 'annual_leave_years_year';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'annual_leave_years_year',
        'annual_leave_years_statutory_entitlement_days',
    ];

    // Relationships
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_annual_leave_year', 'annual_leave_years_year');
    }
}
