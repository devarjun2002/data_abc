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

    protected $casts = [];

    protected $fillable = [
        'property_token',
        'property_availability',
        'property_letting_service',
        'property_letting_available_from',
        'property_letting_furnished_status',
        'property_letting_pets',
        'property_letting_smoking',
        'property_category',
        'property_type',
        'property_address_line_1',
        'property_postcode',
        'property_country',
        'property_status',
        'property_created_by',
        'property_updated_by',
        'property_branch',
        'property_price',
        'property_contract_type',
        'property_latitude',
        'property_longitude',
        'property_summary',
        'property_description'
    ];

    public function propertyCategory(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'property_category', 'property_category_id');
    }

    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'property_type', 'property_type_id');
    }

    public function propertyStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'property_status', 'property_status_id');
    }

    public function propertyBranch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'property_branch', 'branch_id');
    }

    public function propertyCreatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'property_created_by', 'user_id');
    }

    public function propertyUpdatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'property_updated_by', 'user_id');
    }

    public function propertyLettingService(): BelongsTo
    {
        return $this->belongsTo(LettingService::class, 'property_letting_service', 'letting_service_id');
    }

    public function propertyLettingAvailableFrom(): BelongsTo
    {
        return $this->belongsTo(LettingAvailableFrom::class, 'property_letting_available_from', 'letting_available_from_id');
    }

    public function propertyLettingFurnishedStatus(): BelongsTo
    {
        return $this->belongsTo(LettingFurnishedStatus::class, 'property_letting_furnished_status', 'letting_furnished_status_id');
    }

    public function propertyLettingPets(): BelongsTo
    {
        return $this->belongsTo(LettingPets::class, 'property_letting_pets', 'letting_pets_id');
    }

    public function propertyLettingSmoking(): BelongsTo
    {
        return $this->belongsTo(LettingSmoking::class, 'property_letting_smoking', 'letting_smoking_id');
    }

    public function propertyContractType(): BelongsTo
    {
        return $this->belongsTo(ContractType::class, 'property_contract_type', 'contract_type_id');
    }

    public function propertyCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'property_country', 'country_id');
    }

    public function propertyAccessArrangement(): BelongsTo
    {
        return $this->belongsTo(PropertyAccessArrangement::class, 'property_access_arrangement', 'property_access_arrangement_id');
    }

    public function propertyPossessionStatusCompletion(): BelongsTo
    {
        return $this->belongsTo(PossessionStatusCompletion::class, 'property_possession_status_completion', 'possession_status_completion_id');
    }

    public function propertyProbateStatus(): BelongsTo
    {
        return $this->belongsTo(ProbateStatus::class, 'property_probate_status', 'probate_status_id');
    }

    public function propertyTenancy(): HasMany
    {
        return $this->hasMany(Tenancy::class, 'property_id', 'property_id');
    }
}
