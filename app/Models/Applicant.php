<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Applicant extends Model
{
    protected $table = 'applicant';
    protected $primaryKey = 'applicant_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'applicant_pof_date_updated' => 'datetime',
        'applicant_date_created' => 'datetime',
        'applicant_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'applicant_token',
        'applicant_type',
        'applicant_sub_type',
        'applicant_title',
        'applicant_first_name',
        'applicant_surname',
        'applicant_company_name',
        'applicant_company_trading_name',
        'applicant_email',
        'applicant_phone_home',
        'applicant_phone_work',
        'applicant_phone_mobile',
        'applicant_fax',
        'applicant_property_number_name',
        'applicant_apartment_number_name',
        'applicant_address_line_1',
        'applicant_address_line_2',
        'applicant_suburb',
        'applicant_town_city',
        'applicant_postcode',
        'applicant_country',
        'applicant_branch',
        'applicant_purchase_finance',
        'applicant_purchase_type',
        'applicant_purchase_chain',
        'applicant_purchase_chain_status',
        'applicant_purchase_chain_notes',
        'applicant_ftb',
        'applicant_referral_solicitor',
        'applicant_referral_solicitor_notes',
        'applicant_referral_mortgage',
        'applicant_referral_mortgage_notes',
        'applicant_referral_valuation',
        'applicant_referral_valuation_notes',
        'applicant_cash_available',
        'applicant_mortgage_available',
        'applicant_pof_date_updated',
        'applicant_source',
        'applicant_lead_source',
        'applicant_lead_source_notes',
        'applicant_referral_valuation_closed',
        'applicant_referral_valuation_next_review_date',
        'applicant_referral_valuation_next_review_notes',
        'applicant_referral_mortgage_closed',
        'applicant_referral_mortgage_next_review_date',
        'applicant_referral_mortgage_next_review_notes',
        'applicant_rightmove_email_id',
        'applicant_negotiator',
        'applicant_date_created',
        'applicant_date_updated',
        'applicant_created_by',
        'applicant_updated_by'
    ];

    // Relationships --done
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'applicant_branch', 'branch_id');
    }

    public function createdBy(): BelongsTo 
    {
        return $this->belongsTo(Employee::class, 'applicant_created_by', 'employee_id');
    }

    public function valuation(): BelongsTo
    {
        return $this->belongsTo(Valuation::class, 'applicant_referral_valuation', 'valuation_id');
    }

    public function customerType(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'applicant_sub_type', 'customer_type_id');
    }

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'applicant_title', 'title_id');
    }

    public function bodyType(): BelongsTo
    {
        return $this->belongsTo(BodyType::class, 'applicant_type', 'body_type_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_updated_by', 'employee_id');
    }

    public function saleFinance(): BelongsTo
    {
        return $this->belongsTo(SaleFinance::class, 'applicant_purchase_finance', 'sale_finance_id');
    }

    public function propertyOfferSaleType(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSaleType::class, 'applicant_purchase_type', 'property_offer_sale_type_id');
    }

    public function leadSource(): BelongsTo
    {
        return $this->belongsTo(ApplicantLeadSource::class, 'applicant_lead_source', 'applicant_lead_source_id');
    }

    public function negotiator(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_negotiator', 'employee_id');
    }

    // Reverse relationships
    public function interestedApplicants(): HasMany
    {
        return $this->hasMany(InterestedApplicant::class, 'interested_applicant_applicant_id', 'applicant_id');
    }

    public function requirements(): HasMany
    {
        return $this->hasMany(ApplicantRequirement::class, 'applicant_requirement_applicant_id', 'applicant_id');
    }

    public function propertyOfferSaleApplicants(): HasMany
    {
        return $this->hasMany(PropertyOfferSaleApplicants::class, 'applicant_id', 'applicant_id');
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_applicant', 'applicant_id', 'property_id');
    }

    public function propertyOfferSales(): BelongsToMany
    {
        return $this->belongsToMany(PropertyOfferSale::class, 'property_offer_sale_applicants', 'applicant_id', 'property_offer_sale_id');
    }

    public function applications(): BelongsToMany
    {
        return $this->belongsToMany(Application::class, 'application_applicant', 'applicant_id', 'application_id');
    }
}
