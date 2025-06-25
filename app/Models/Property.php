<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    protected $table = 'property';
    protected $primaryKey = 'property_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'property_token',
        'property_address_line_1',
        'property_address_line_2',
        'property_suburb',
        'property_town_city',
        'property_postcode',
        'property_country',
        'property_branch',
        'property_status',
        'property_type',
        'property_category',
        'property_availability',
        'property_condition',
        'property_furnished_status',
        'property_tenure_type',
        'property_term_type',
        'property_possession_status',
        'property_rent_frequency',
        'property_price_qualifier',
        'property_asking_price',
        'property_rent_amount',
        'property_bedrooms',
        'property_bathrooms',
        'property_reception_rooms',
        'property_description',
        'property_features',
        'property_notes'
    ];

    // Relationships
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'property_branch', 'branch_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'property_status', 'property_status_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'property_type', 'property_type_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'property_category', 'property_category_id');
    }

    public function availability(): BelongsTo
    {
        return $this->belongsTo(PropertyAvailability::class, 'property_availability', 'property_availability_id');
    }

    public function condition(): BelongsTo
    {
        return $this->belongsTo(PropertyCondition::class, 'property_condition', 'property_condition_id');
    }

    public function furnishedStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyFurnishedStatus::class, 'property_furnished_status', 'property_furnished_status_id');
    }

    public function tenureType(): BelongsTo
    {
        return $this->belongsTo(PropertyTenureType::class, 'property_tenure_type', 'property_tenure_type_id');
    }

    public function termType(): BelongsTo
    {
        return $this->belongsTo(PropertyTermType::class, 'property_term_type', 'property_term_type_id');
    }

    public function possessionStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyPossessionStatus::class, 'property_possession_status', 'property_possession_status_id');
    }

    public function rentFrequency(): BelongsTo
    {
        return $this->belongsTo(PropertyRentFrequency::class, 'property_rent_frequency', 'property_rent_frequency_id');
    }

    public function priceQualifier(): BelongsTo
    {
        return $this->belongsTo(PropertyPriceQualifier::class, 'property_price_qualifier', 'property_price_qualifier_id');
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(PropertyFeature::class, 'property_feature_property', 'property_id', 'property_feature_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(PropertyImage::class, 'property_id', 'property_id');
    }

    public function vendors(): BelongsToMany
    {
        return $this->belongsToMany(Vendor::class, 'property_vendor', 'property_id', 'vendor_id');
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'property_employee', 'property_id', 'employee_id');
    }

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'property_company', 'property_id', 'company_id');
    }

    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'property_country', 'property_id', 'country_id');
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(PropertyRoom::class, 'property_id', 'property_id');
    }

    public function lettings(): HasMany
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_id', 'property_id');
    }

    public function developments(): HasMany
    {
        return $this->hasMany(Development::class, 'development_property_id', 'property_id');
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class, 'certificate_property_id', 'property_id');
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'application_property_id', 'property_id');
    }

    public function applicants(): BelongsToMany
    {
        return $this->belongsToMany(Applicant::class, 'property_applicant', 'property_id', 'applicant_id');
    }

    public function landlords(): BelongsToMany
    {
        return $this->belongsToMany(Landlord::class, 'property_landlord', 'property_id', 'landlord_id');
    }
}
