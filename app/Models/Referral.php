<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Referral extends Model
{
    protected $table = 'referral';
    protected $primaryKey = 'referral_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'referral_type',
        'referral_sale_purchase',
        'referral_customer_type',
        'referral_customer',
        'referral_customer_email',
        'referral_directory_company',
        'referral_property',
        'referral_valuation',
        'referral_notes',
        'referral_notes_private',
        'referral_notes_directory_company',
        'referral_employee',
        'referral_status',
        'referral_commission_our_invoice_ref',
        'referral_commission_amount',
        'referral_commission_date_paid',
        'referral_total_amount_paid',
        'referral_total_number_of_payments',
        'referral_total_amount_paid_employee',
        'referral_total_number_of_payments_employee',
        'referral_date_created',
        'referral_date_updated',
        'referral_created_by',
        'referral_updated_by'
    ];

    // Relationships
    public function type(): BelongsTo
    {
        return $this->belongsTo(ReferralType::class, 'referral_type', 'referral_type_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(ReferralStatus::class, 'referral_status', 'referral_status_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'referral_employee', 'employee_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'referral_property', 'property_id');
    }

    public function salePurchase(): HasOne
    {
        return $this->belongsTo(ReferralSalePurchase::class, 'referral_id', 'referral_id');
    }

    public function payments(): HasMany
    {
        return $this->belongsTo(ReferralPayments::class, 'referral_id', 'referral_id');
    }

    public function updates(): HasMany
    {
        return $this->belongsTo(ReferralUpdates::class, 'referral_id', 'referral_id');
    }
}
