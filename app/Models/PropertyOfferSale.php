<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Property;
use App\Models\PropertyOfferSale;
use App\Models\PropertyOfferSaleType;
use App\Models\PropertyOfferStatus;
use App\Models\SaleFinance;
use App\Models\SurveyStatus;

use Illuminate\Database\Eloquent\Model;

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
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_created_by', 'employee_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_employee', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_offer_sale_property', 'property_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updated_by', 'employee_id');
    }

    public function finance()
    {
        return $this->belongsTo(SaleFinance::class, 'property_offer_sale_finance', 'sale_finance_id');
    }

    public function offerType()
    {
        return $this->belongsTo(PropertyOfferSaleType::class, 'property_offer_sale_type', 'property_offer_sale_type_id');
    }

    public function surveyStatus()
    {
        return $this->belongsTo(SurveyStatus::class, 'property_offer_sale_survey', 'survey_status_id');
    }

    public function offerStatus()
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status', 'property_offer_status_id');
    }

    public function revisedOffer()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_revised_offer_id', 'property_offer_sale_id');
    }
    // Reverse Relationships
public function sales()
    {
        return $this->hasMany(Sale::class, 'sale_offer_id', 'property_offer_sale_id');
    }
}