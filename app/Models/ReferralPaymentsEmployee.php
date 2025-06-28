<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralPaymentsEmployee extends Model
{
    protected $table = 'referral_payments_employee';
    protected $primaryKey = 'referral_payments_employee_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'referral_payments_employee_date_paid' => 'datetime',
        'referral_payments_employee_date_created' => 'datetime',
        'referral_payments_employee_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'referral_payments_employee_referral_id',
        'referral_payments_employee_payment_type',
        'referral_payments_employee_employee_id',
        'referral_payments_employee_amount',
        'referral_payments_employee_date_paid',
        'referral_payments_employee_date_created',
        'referral_payments_employee_date_updated',
        'referral_payments_employee_created_by',
        'referral_payments_employee_updated_by'
    ];

    // Relationships
    public function referral()
    {
        return $this->belongsTo(Referral::class, 'referral_payments_employee_referral_id', 'referral_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'referral_payments_employee_employee_id', 'employee_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'referral_payments_employee_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'referral_payments_employee_updated_by', 'employee_id');
    }
}
