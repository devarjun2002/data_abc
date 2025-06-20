<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualLeaveAccrualMethod extends Model
{
    protected $table = 'annual_leave_accrual_method';
    protected $primaryKey = 'annual_leave_accrual_method_id';
    public $timestamps = false;
    protected $fillable = [];
}
