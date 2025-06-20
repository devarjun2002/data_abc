<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicant';
    protected $primaryKey = 'applicant_id';
    public $timestamps = false;
    protected $fillable = [];

    public function interestedApplicants()
    {
        return $this->hasMany(InterestedApplicant::class, 'interested_applicant_applicant_id', 'applicant_id');
    }
    public function applicationUpdates()
    {
        return $this->hasMany(ApplicationUpdates::class, 'applicant_updates_applicant_id', 'applicant_id');
    }
    public function updates()
    {
        return $this->hasMany(ApplicantUpdates::class, 'applicant_updates_applicant_id', 'applicant_id');
    }
    public function requirements()
    {
        return $this->hasMany(ApplicantRequirement::class, 'applicant_requirement_applicant_id', 'applicant_id');
    }
    public function chainStatus()
    {
        return $this->belongsTo(ApplicantChainStatus::class, 'applicant_chain_status_id', 'applicant_chain_status_id');
    }
    public function leadSource()
    {
        return $this->belongsTo(ApplicantLeadSource::class, 'applicant_lead_source_id', 'applicant_lead_source_id');
    }
    public function propertyApplicants()
    {
        return $this->hasMany(PropertyApplicant::class, 'applicant_id', 'applicant_id');
    }
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_applicant', 'applicant_id', 'property_id');
    }
    public function propertyOfferSaleApplicants()
    {
        return $this->hasMany(PropertyOfferSaleApplicants::class, 'applicant_id', 'applicant_id');
    }
    public function propertyOfferSales()
    {
        return $this->belongsToMany(PropertyOfferSale::class, 'property_offer_sale_applicants', 'applicant_id', 'property_offer_sale_id');
    }
}
