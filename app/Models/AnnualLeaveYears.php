<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualLeaveYears extends Model
{
    protected $table = 'annual_leave_years';
    protected $primaryKey = 'annual_leave_years_year';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'annual_leave_years_year',
        'annual_leave_years_statutory_entitlement_days'
    ];

    protected $casts = [
        'annual_leave_years_year' => 'integer',
        'annual_leave_years_statutory_entitlement_days' => 'integer'
    ];
}
