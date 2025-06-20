<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function features()
    {
        return $this->belongsToMany(PropertyFeature::class, 'property_feature_property', 'property_id', 'property_feature_id');
    }
    public function images()
    {
        return $this->hasMany(PropertyImage::class, 'property_id', 'id');
    }

    public function vendors()
    {
        return $this->belongsToMany(Vendor::class, 'property_vendor', 'property_id', 'vendor_id');
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'property_employee', 'property_id', 'employee_id');
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'property_company', 'property_id', 'company_id');
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'property_country', 'property_id', 'country_id');
    }

    public function rooms()
    {
        return $this->hasMany(PropertyRoom::class, 'property_id', 'id');
    }
    public function lettings()
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_id', 'id');
    }
    public function developments()
    {
        return $this->hasMany(Development::class, 'property_id', 'id');
    }
    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'property_id', 'id');
    }
    public function propertyApplicants()
    {
        return $this->hasMany(PropertyApplicant::class, 'property_id', 'property_id');
    }
    public function applicants()
    {
        return $this->belongsToMany(Applicant::class, 'property_applicant', 'property_id', 'applicant_id');
    }
}
