<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function referral(): BelongsTo
    {
        return $this->belongsTo(Referral::class, 'referral_payments_referral_id', 'referral_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ReferralPaymentType::class, 'referral_payments_id', 'referral_payments_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'referral_payments_created_by', 'employee_id');
    }

    public function employees(): HasMany
    {
        return $this->hasMany(ReferralPaymentsEmployee::class, 'referral_payments_id', 'referral_payments_id');
    }
}
