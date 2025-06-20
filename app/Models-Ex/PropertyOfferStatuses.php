<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferStatuses extends Model
{
    protected $table = 'property_offer_statuses';
    protected $primaryKey = 'property_offer_statuses_id';
    public $timestamps = false;
    protected $guarded = [];

    public function propertyOffers()
    {
        return $this->hasMany(PropertyOffers::class, 'property_offer_statuses_id', 'property_offer_statuses_id');
    }
}
