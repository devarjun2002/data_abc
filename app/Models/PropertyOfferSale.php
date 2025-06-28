<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyOfferSale extends Model
{
    protected $table = 'property_offer_sale';
    protected $primaryKey = 'property_offer_sale_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_offer_sale_date_created' => 'datetime',
        'property_offer_sale_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'property_offer_sale_property',
        'property_offer_sale_price',
        'property_offer_sale_finance',
        'property_offer_sale_mortgage_deposit',
        'property_offer_sale_type',
        'property_offer_sale_survey',
        'property_offer_sale_htb',
        'property_offer_sale_htb_approved',
        'property_offer_sale_chain',
        'property_offer_sale_status',
        'property_offer_sale_status_reason',
        'property_offer_sale_notes',
        'property_offer_sale_notes_private',
        'property_offer_sale_employee',
        'property_offer_sale_referral_solicitor',
        'property_offer_sale_referral_solicitor_notes',
        'property_offer_sale_referral_surveyor',
        'property_offer_sale_referral_surveyor_notes',
        'property_offer_sale_referral_mortgage',
        'property_offer_sale_referral_mortgage_notes',
        'property_offer_sale_referral_valuation',
        'property_offer_sale_referral_valuation_notes',
        'property_offer_sale_viewings',
        'property_offer_sale_revised_offer_id',
        'property_offer_sale_date_created',
        'property_offer_sale_date_updated',
        'property_offer_sale_created_by',
        'property_offer_sale_updated_by',
    ];

    // Relationships --done
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_created_by', 'employee_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_employee', 'employee_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_offer_sale_property', 'property_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updated_by', 'employee_id');
    }

    public function finance(): BelongsTo
    {
        return $this->belongsTo(SaleFinance::class, 'property_offer_sale_finance', 'sale_finance_id');
    }

    public function offerType(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSaleType::class, 'property_offer_sale_type', 'property_offer_sale_type_id');
    }

    public function surveyStatus(): BelongsTo
    {
        return $this->belongsTo(SurveyStatus::class, 'property_offer_sale_survey', 'survey_status_id');
    }

    public function offerStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status', 'property_offer_status_id');
    }

    public function revisedOffer(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_revised_offer_id', 'property_offer_sale_id');
    }
}
