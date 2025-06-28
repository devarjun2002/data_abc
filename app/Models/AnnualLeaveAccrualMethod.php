<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnnualLeaveAccrualMethod extends Model
{
    protected $table = 'annual_leave_accrual_method';
    protected $primaryKey = 'annual_leave_accrual_method_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'annual_leave_accrual_method_name',
    ];

    // Relationships --done
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_annual_leave_accrual_method', 'annual_leave_accrual_method_id');
    }
}
