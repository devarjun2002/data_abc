<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOffers extends Model
{
    protected $table = 'property_offers';
    protected $primaryKey = 'property_offers_id';
    public $timestamps = false;
    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
    public function status()
    {
        return $this->belongsTo(PropertyOfferStatuses::class, 'property_offer_statuses_id', 'property_offer_statuses_id');
    }
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'property_offers_id', 'property_offers_id');
    }
    public function buyers()
    {
        return $this->hasMany(Buyer::class, 'property_offers_id', 'property_offers_id');
    }
    public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'property_offers_id', 'property_offers_id');
    }
}
