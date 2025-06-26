<?php

namespace App\Models;

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

    public function offerSaleApplicants()
    {
        return $this->hasMany(PropertyOfferSaleApplicants::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }
    public function applicants()
    {
        return $this->belongsToMany(Applicant::class, 'property_offer_sale_applicants', 'property_offer_sale_id', 'applicant_id');
    }
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_offer_sale_property', 'property_id');
    }
    public function chains()
    {
        return $this->hasMany(PropertyOfferSaleChain::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }
    public function logStatuses()
    {
        return $this->hasMany(PropertyOfferSaleLogStatus::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }
    public function updates()
    {
        return $this->hasMany(PropertyOfferSaleUpdates::class, 'property_offer_sale_updates_property_offer_sale_id', 'property_offer_sale_id');
    }
    public function attachments()
    {
        return $this->hasMany(PropertyOfferSaleAttachments::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }
}
