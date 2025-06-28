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

    // Relationships --done
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_updated_by');
    }

    public function responsibleEmployee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_employee_responsible');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'sale_property');
    }

    public function offer(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'sale_offer_id', 'property_offer_sale_id');
    }

    public function purchaseFinance(): BelongsTo
    {
        return $this->belongsTo(SaleFinance::class, 'sale_purchase_finance');
    }

    public function vendorSolicitorCompanyIntermediary(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_vendor_solicitor_company_intermediary');
    }

    public function vendorSolicitorCompany(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_vendor_solicitor_company');
    }

    public function vendorMortgageAdvisor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_vendor_mortgage_advisor');
    }

    public function buyerSolicitorCompanyIntermediary(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_buyer_solicitor_company_intermediary');
    }

    public function buyerSolicitorCompany(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_buyer_solicitor_company');
    }

    public function buyerMortgageAdvisor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_buyer_mortgage_advisor');
    }

    public function vendorSolicitorCompanyIndividual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'sale_vendor_solicitor_company_individual');
    }

    public function vendorMortgageAdvisorIndividual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'sale_vendor_mortgage_advisor_individual');
    }

    public function buyerSolicitorCompanyIndividual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'sale_buyer_solicitor_company_individual');
    }

    public function buyerMortgageAdvisorIndividual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'sale_buyer_mortgage_advisor_individual');
    }

    public function saleStatus(): BelongsTo
    {
        return $this->belongsTo(SaleStatus::class, 'sale_status');
    }

    public function collapsedReason(): BelongsTo
    {
        return $this->belongsTo(SaleCollapsedReason::class, 'sale_collapsed_reason_id');
    }

    public function commissionCompletionPaymentType(): BelongsTo
    {
        return $this->belongsTo(CommissionType::class, 'sale_commission_completion_payment_type');
    }
}
