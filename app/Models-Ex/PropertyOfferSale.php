<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSale extends Model
{
    protected $table = 'property_offer_sale';
    protected $primaryKey = 'property_offer_sale_id';
    public $timestamps = false;
    protected $fillable = [];

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
