<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function referralPayment(): BelongsTo
    {
        return $this->belongsTo(ReferralPayments::class, 'referral_payments_employee_referral_id', 'referral_payments_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'referral_payments_employee_employee_id', 'referral_payments_employee_employee_id');
    }
}
