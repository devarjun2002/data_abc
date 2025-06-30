<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Referral;

use Illuminate\Database\Eloquent\Model;

class ReferralPayments extends Model
{
    protected $table = 'referral_payments';
    protected $primaryKey = 'referral_payments_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'referral_payments_date_paid' => 'datetime',
        'referral_payments_date_created' => 'datetime',
        'referral_payments_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'referral_payments_referral_id',
        'referral_payments_amount',
        'referral_payments_date_paid',
        'referral_payments_date_created',
        'referral_payments_date_updated',
        'referral_payments_created_by',
        'referral_payments_updated_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'referral_payments_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'referral_payments_updated_by', 'employee_id');
    }

    public function referral()
    {
        return $this->belongsTo(Referral::class, 'referral_payments_referral_id', 'referral_id');
    }
}
