<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralPaymentsEmployee extends Model
{
    protected $table = 'referral_payments_employee';
    protected $primaryKey = 'referral_payments_employee_id';
    public $timestamps = false;
    protected $fillable = [];
}
