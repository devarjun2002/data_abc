<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sale extends Model
{
    protected $table = 'sale';
    protected $primaryKey = 'sale_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'sale_target_exchange_date' => 'datetime',
        'sale_target_completion_date' => 'datetime',
        'sale_date_created' => 'datetime',
        'sale_date_updated' => 'datetime',
        'sale_agreed_date' => 'datetime',
    ];

    protected $fillable = [
        'sale_offer_id',
        'sale_property',
        'sale_agreed_date',
        'sale_agreed_price',
        'sale_purchase_finance',
        'sale_notes',
        'sale_vendor_solicitor_company_intermediary',
        'sale_vendor_solicitor_company',
        'sale_vendor_solicitor_company_individual',
        'sale_vendor_mortgage_advisor',
        'sale_vendor_mortgage_advisor_individual',
        'sale_buyer_solicitor_company_intermediary',
        'sale_buyer_solicitor_company',
        'sale_buyer_solicitor_company_individual',
        'sale_buyer_mortgage_advisor',
        'sale_buyer_mortgage_advisor_individual',
        'sale_status',
        'sale_target_exchange_date',
        'sale_target_completion_date',
        'sale_collapsed_reason',
        'sale_collapsed_reason_id',
        'sale_viewings_status',
        'sale_employee_responsible',
        'sale_next_review_date',
        'sale_next_review_notes',
        'sale_media_utilities',
        'sale_commission_completion_payment',
        'sale_commission_completion_payment_type',
        'sale_commission_completion_date_paid',
        'sale_completion_date',
        'sale_invoice_check_override',
        'sale_auto_progression_chase_vendor',
        'sale_auto_progression_chase_buyer',
        'sale_last_update',
        'sale_created_by',
        'sale_updated_by',
        'sale_date_created',
        'sale_date_updated',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'sale_property', 'property_id');
    }

    public function vendor(): HasOne {
        return $this->hasOne(Vendor::class, 'vendor_id', 'sale_vendor');
    }

    public function buyers(): HasMany {
        return $this->hasMany(SaleBuyers::class, 'sale_id', 'sale_id')->where('sale_buyers_primary', 1);
    }

    public function employee(): BelongsTo {
        return $this->belongsTo(Employee::class, 'sale_employee', 'employee_id');
    }

    public function status(): BelongsTo {
        return $this->belongsTo(SaleStatus::class, 'sale_status', 'sale_status_id');
    }

    public function collapsedReason(): BelongsTo {
        return $this->belongsTo(SaleCollapsedReason::class, 'sale_collapsed_reason_id', 'sale_collapsed_reason_id');
    }

    public function createdBy(): BelongsTo {
        return $this->belongsTo(Employee::class, 'sale_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo {
        return $this->belongsTo(Employee::class, 'sale_updated_by', 'employee_id');
    }

    public function offer(): BelongsTo {
        return $this->belongsTo(Offer::class, 'sale_offer_id', 'offer_id');
    }

    public function employeeResponsible(): BelongsTo {
        return $this->belongsTo(Employee::class, 'sale_employee_responsible', 'employee_id');
    }
}
