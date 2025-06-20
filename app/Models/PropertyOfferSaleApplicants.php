<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleApplicants extends Model
{
    protected $table = 'property_offer_sale_applicants';
    protected $primaryKey = 'property_offer_sale_applicants_id';
    public $timestamps = false;
    protected $fillable = [];

    public function propertyOfferSale()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id', 'applicant_id');
    }
}
