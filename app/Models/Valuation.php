<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Valuation extends Model
{
    protected $table = 'valuation';
    protected $primaryKey = 'valuation_id';
    
    // Use custom timestamp fields
    const CREATED_AT = 'valuation_date_created';
    const UPDATED_AT = 'valuation_date_updated';

    protected $fillable = [
        'valuation_title',
        'valuation_first_name',
        'valuation_surname',
        'valuation_capacity',
        'valuation_email',
        'valuation_phone_home',
        'valuation_phone_work',
        'valuation_phone_mobile',
        'valuation_home_address_property_apartment_number_name',
        'valuation_home_address_property_number_name',
        'valuation_home_address_property_address_line_1',
        'valuation_home_address_property_address_line_2',
        'valuation_home_address_property_suburb',
        'valuation_home_address_property_town_city',
        'valuation_home_address_property_postcode',
        'valuation_home_address_property_country',
        'valuation_property_apartment_number_name',
        'valuation_property_number_name',
        'valuation_property_address_line_1',
        'valuation_property_address_line_2',
        'valuation_property_suburb',
        'valuation_property_town_city',
        'valuation_property_postcode',
        'valuation_property_country',
        'valuation_property_availability',
        'valuation_property_category',
        'valuation_property_type',
        'valuation_property_no_bedrooms',
        'valuation_property_no_bathrooms',
        'valuation_property_no_receptions',
        'valuation_property_price_from',
        'valuation_property_price_to',
        'valuation_property_price_asking',
        'valuation_price_qualifier',
        'valuation_branch',
        'valuation_employee',
        'valuation_negotiator',
        'valuation_status',
        'valuation_lost_reason',
        'valuation_notes',
        'valuation_notes_private',
        'valuation_value_notes',
        'valuation_next_review_date',
        'valuation_next_review_date_negotiator',
        'valuation_next_review_date_lister',
        'valuation_next_review_date_lister_notes',
        'valuation_lead_source',
        'valuation_lead_source_notes',
        'valuation_occupancy',
        'valuation_reason',
        'valuation_lost_to',
        'valuation_lost_sale_fee',
        'valuation_lost_sale_fee_type',
        'valuation_property_price_marketed',
        'valuation_price_qualifier_marketed',
        'valuation_tenure_type',
        'valuation_sale_fee',
        'valuation_sale_fee_type',
        'valuation_tenant_find_fee',
        'valuation_tenant_find_fee_type',
        'valuation_tenant_find_with_management_fee',
        'valuation_tenant_find_with_management_fee_type',
        'valuation_management_fee',
        'valuation_management_fee_type',
        'valuation_to_landlord',
        'valuation_to_vendor',
        'valuation_to_property',
        'valuation_condition',
        'valuation_contract_type',
        'valuation_multi_agent',
        'valuation_multi_agent_notes',
        'valuation_multi_agent_withdrawal_date',
        'valuation_instruct_epc',
        'valuation_photographer',
        'valuation_photographer_access',
        'valuation_minimum_contract_period',
        'valuation_letting_service',
        'valuation_lister',
        'valuation_instruction_override',
        'valuation_instruct_video',
        'valuation_recommendations',
        'valuation_date_created',
        'valuation_date_updated',
        'valuation_created_by',
        'valuation_updated_by',
        'valuation_title_2',
        'valuation_first_name_2',
        'valuation_surname_2',
        'valuation_email_2',
        'valuation_phone_home_2',
        'valuation_phone_work_2',
        'valuation_phone_mobile_2',
        'valuation_home_address_property_apartment_number_name_2',
        'valuation_home_address_property_number_name_2',
        'valuation_home_address_property_address_line_1_2',
        'valuation_home_address_property_address_line_2_2',
        'valuation_home_address_property_suburb_2',
        'valuation_home_address_property_town_city_2',
        'valuation_home_address_property_postcode_2',
        'valuation_home_address_property_country_2',
        'valuation_title_3',
        'valuation_first_name_3',
        'valuation_surname_3',
        'valuation_email_3',
        'valuation_phone_home_3',
        'valuation_phone_work_3',
        'valuation_phone_mobile_3',
        'valuation_home_address_property_apartment_number_name_3',
        'valuation_home_address_property_number_name_3',
        'valuation_home_address_property_address_line_1_3',
        'valuation_home_address_property_address_line_2_3',
        'valuation_home_address_property_suburb_3',
        'valuation_home_address_property_town_city_3',
        'valuation_home_address_property_postcode_3',
        'valuation_home_address_property_country_3',
        'valuation_title_4',
        'valuation_first_name_4',
        'valuation_surname_4',
        'valuation_email_4',
        'valuation_phone_home_4',
        'valuation_phone_work_4',
        'valuation_phone_mobile_4',
        'valuation_home_address_property_apartment_number_name_4',
        'valuation_home_address_property_number_name_4',
        'valuation_home_address_property_address_line_1_4',
        'valuation_home_address_property_address_line_2_4',
        'valuation_home_address_property_suburb_4',
        'valuation_home_address_property_town_city_4',
        'valuation_home_address_property_postcode_4',
        'valuation_home_address_property_country_4',
        'valuation_capacity_2',
        'valuation_capacity_3',
        'valuation_capacity_4',
        'valuation_referral_solicitor_notes',
        'valuation_referral_mortgage_notes',
        'valuation_tenant_contact_details',
        'valuation_premium_price_guide_link',
        'valuation_status_reason',
        'valuation_email_reminders',
        'valuation_total_amount_paid_employee',
        'valuation_property_living_space',
        'valuation_property_living_space_unit',
        'valuation_price_per_square_foot',
        'valuation_valuer_inherited',
        'valuation_ownership_period',
        'valuation_extended_loft_conversion_info',
        'valuation_major_improvements',
        'valuation_timescale_selling',
        'valuation_otm_details',
        'valuation_other_vals',
        'valuation_price_expectations',
        'valuation_parking_arrangements',
        'valuation_outdoor_space',
        'valuation_instruct_video_reason',
        'valuation_legal_owner_contact_details'
    ];

    // Relationships
    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'valuation_property_type', 'property_type_id');
    }

    public function propertyCategory(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'valuation_property_category', 'property_category_id');
    }

    public function propertyAvailability(): BelongsTo
    {
        return $this->belongsTo(PropertyAvailability::class, 'valuation_property_availability', 'property_availability_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'valuation_branch', 'branch_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_employee', 'employee_id');
    }

    public function negotiator(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_negotiator', 'employee_id');
    }

    public function lister(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_lister', 'employee_id');
    }

    public function photographer(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_photographer', 'employee_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_updated_by', 'employee_id');
    }

    public function leadSource(): BelongsTo
    {
        return $this->belongsTo(LeadSource::class, 'valuation_lead_source', 'lead_source_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'valuation_to_property', 'property_id');
    }

    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'valuation_to_landlord', 'landlord_id');
    }

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(PropertyVendor::class, 'valuation_to_vendor', 'property_vendor_id');
    }

    // Accessors
    public function getFullNameAttribute(): string
    {
        return trim($this->valuation_first_name . ' ' . $this->valuation_surname);
    }

    public function getFullName2Attribute(): string
    {
        return trim($this->valuation_first_name_2 . ' ' . $this->valuation_surname_2);
    }

    public function getFullName3Attribute(): string
    {
        return trim($this->valuation_first_name_3 . ' ' . $this->valuation_surname_3);
    }

    public function getFullName4Attribute(): string
    {
        return trim($this->valuation_first_name_4 . ' ' . $this->valuation_surname_4);
    }

    public function getHomeAddressAttribute(): string
    {
        $address = [];
        
        if ($this->valuation_home_address_property_apartment_number_name) {
            $address[] = $this->valuation_home_address_property_apartment_number_name;
        }
        
        if ($this->valuation_home_address_property_number_name) {
            $address[] = $this->valuation_home_address_property_number_name;
        }
        
        if ($this->valuation_home_address_property_address_line_1) {
            $address[] = $this->valuation_home_address_property_address_line_1;
        }
        
        if ($this->valuation_home_address_property_address_line_2) {
            $address[] = $this->valuation_home_address_property_address_line_2;
        }
        
        if ($this->valuation_home_address_property_suburb) {
            $address[] = $this->valuation_home_address_property_suburb;
        }
        
        if ($this->valuation_home_address_property_town_city) {
            $address[] = $this->valuation_home_address_property_town_city;
        }
        
        if ($this->valuation_home_address_property_postcode) {
            $address[] = $this->valuation_home_address_property_postcode;
        }
        
        return implode(', ', $address);
    }

    public function getPropertyAddressAttribute(): string
    {
        $address = [];
        
        if ($this->valuation_property_apartment_number_name) {
            $address[] = $this->valuation_property_apartment_number_name;
        }
        
        if ($this->valuation_property_number_name) {
            $address[] = $this->valuation_property_number_name;
        }
        
        if ($this->valuation_property_address_line_1) {
            $address[] = $this->valuation_property_address_line_1;
        }
        
        if ($this->valuation_property_address_line_2) {
            $address[] = $this->valuation_property_address_line_2;
        }
        
        if ($this->valuation_property_suburb) {
            $address[] = $this->valuation_property_suburb;
        }
        
        if ($this->valuation_property_town_city) {
            $address[] = $this->valuation_property_town_city;
        }
        
        if ($this->valuation_property_postcode) {
            $address[] = $this->valuation_property_postcode;
        }
        
        return implode(', ', $address);
    }

    public function getPriceRangeAttribute(): string
    {
        if ($this->valuation_property_price_from && $this->valuation_property_price_to) {
            return '£' . number_format($this->valuation_property_price_from, 0) . ' - £' . number_format($this->valuation_property_price_to, 0);
        } elseif ($this->valuation_property_price_from) {
            return '£' . number_format($this->valuation_property_price_from, 0) . '+';
        } elseif ($this->valuation_property_price_to) {
            return 'Up to £' . number_format($this->valuation_property_price_to, 0);
        }
        
        return 'Price on application';
    }

    public function getIsOverdueAttribute(): bool
    {
        if (!$this->valuation_next_review_date) {
            return false;
        }
        
        return $this->valuation_next_review_date->isPast();
    }

    public function getDaysUntilReviewAttribute(): int
    {
        if (!$this->valuation_next_review_date) {
            return 0;
        }
        
        return $this->valuation_next_review_date->diffInDays(now(), false);
    }

    public function getPrimaryContactAttribute(): array
    {
        return [
            'title' => $this->valuation_title,
            'first_name' => $this->valuation_first_name,
            'surname' => $this->valuation_surname,
            'full_name' => $this->full_name,
            'email' => $this->valuation_email,
            'phone_home' => $this->valuation_phone_home,
            'phone_work' => $this->valuation_phone_work,
            'phone_mobile' => $this->valuation_phone_mobile,
            'capacity' => $this->valuation_capacity
        ];
    }

    public function getSecondaryContactsAttribute(): array
    {
        $contacts = [];
        
        if ($this->valuation_first_name_2 || $this->valuation_surname_2) {
            $contacts[] = [
                'title' => $this->valuation_title_2,
                'first_name' => $this->valuation_first_name_2,
                'surname' => $this->valuation_surname_2,
                'full_name' => $this->full_name_2,
                'email' => $this->valuation_email_2,
                'phone_home' => $this->valuation_phone_home_2,
                'phone_work' => $this->valuation_phone_work_2,
                'phone_mobile' => $this->valuation_phone_mobile_2,
                'capacity' => $this->valuation_capacity_2
            ];
        }
        
        if ($this->valuation_first_name_3 || $this->valuation_surname_3) {
            $contacts[] = [
                'title' => $this->valuation_title_3,
                'first_name' => $this->valuation_first_name_3,
                'surname' => $this->valuation_surname_3,
                'full_name' => $this->full_name_3,
                'email' => $this->valuation_email_3,
                'phone_home' => $this->valuation_phone_home_3,
                'phone_work' => $this->valuation_phone_work_3,
                'phone_mobile' => $this->valuation_phone_mobile_3,
                'capacity' => $this->valuation_capacity_3
            ];
        }
        
        if ($this->valuation_first_name_4 || $this->valuation_surname_4) {
            $contacts[] = [
                'title' => $this->valuation_title_4,
                'first_name' => $this->valuation_first_name_4,
                'surname' => $this->valuation_surname_4,
                'full_name' => $this->full_name_4,
                'email' => $this->valuation_email_4,
                'phone_home' => $this->valuation_phone_home_4,
                'phone_work' => $this->valuation_phone_work_4,
                'phone_mobile' => $this->valuation_phone_mobile_4,
                'capacity' => $this->valuation_capacity_4
            ];
        }
        
        return $contacts;
    }

    public function getPropertyDetailsAttribute(): array
    {
        return [
            'type' => $this->propertyType,
            'category' => $this->propertyCategory,
            'availability' => $this->propertyAvailability,
            'bedrooms' => $this->valuation_property_no_bedrooms,
            'bathrooms' => $this->valuation_property_no_bathrooms,
            'receptions' => $this->valuation_property_no_receptions,
            'living_space' => $this->valuation_property_living_space,
            'living_space_unit' => $this->valuation_property_living_space_unit,
            'price_from' => $this->valuation_property_price_from,
            'price_to' => $this->valuation_property_price_to,
            'price_asking' => $this->valuation_property_price_asking,
            'price_marketed' => $this->valuation_property_price_marketed,
            'price_per_square_foot' => $this->valuation_price_per_square_foot,
            'address' => $this->property_address
        ];
    }

    // Scopes
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('valuation_status', '!=', 'cancelled');
    }

    public function scopeOverdue(Builder $query): Builder
    {
        return $query->where('valuation_next_review_date', '<', now());
    }

    public function scopeDueToday(Builder $query): Builder
    {
        return $query->whereDate('valuation_next_review_date', today());
    }

    public function scopeDueThisWeek(Builder $query): Builder
    {
        return $query->whereBetween('valuation_next_review_date', [now(), now()->addWeek()]);
    }

    public function scopeByBranch(Builder $query, int $branchId): Builder
    {
        return $query->where('valuation_branch', $branchId);
    }

    public function scopeByEmployee(Builder $query, int $employeeId): Builder
    {
        return $query->where('valuation_employee', $employeeId);
    }

    public function scopeByPropertyType(Builder $query, int $propertyTypeId): Builder
    {
        return $query->where('valuation_property_type', $propertyTypeId);
    }

    public function scopeByStatus(Builder $query, string $status): Builder
    {
        return $query->where('valuation_status', $status);
    }

    public function scopeWithPriceRange(Builder $query, float $minPrice = null, float $maxPrice = null): Builder
    {
        if ($minPrice) {
            $query->where('valuation_property_price_from', '>=', $minPrice);
        }
        
        if ($maxPrice) {
            $query->where('valuation_property_price_to', '<=', $maxPrice);
        }
        
        return $query;
    }

    public function scopeRecent(Builder $query, int $days = 30): Builder
    {
        return $query->where('valuation_date_created', '>=', now()->subDays($days));
    }

    public function scopeByLeadSource(Builder $query, int $leadSourceId): Builder
    {
        return $query->where('valuation_lead_source', $leadSourceId);
    }

    public function scopeWithProperty(Builder $query): Builder
    {
        return $query->whereNotNull('valuation_to_property');
    }

    public function scopeWithoutProperty(Builder $query): Builder
    {
        return $query->whereNull('valuation_to_property');
    }

    public function scopeMultiAgent(Builder $query): Builder
    {
        return $query->where('valuation_multi_agent', true);
    }

    public function scopeRequiresEpc(Builder $query): Builder
    {
        return $query->where('valuation_instruct_epc', true);
    }

    public function scopeRequiresVideo(Builder $query): Builder
    {
        return $query->where('valuation_instruct_video', true);
    }

    // Helper methods
    public function isActive(): bool
    {
        return $this->valuation_status !== 'cancelled' && $this->valuation_status !== 'lost';
    }

    public function isOverdue(): bool
    {
        return $this->is_overdue;
    }

    public function markAsReviewed(): void
    {
        $this->update([
            'valuation_next_review_date' => now()->addDays(30), // Default 30 days
            'valuation_date_updated' => now()
        ]);
    }

    public function assignToEmployee(int $employeeId): void
    {
        $this->update([
            'valuation_employee' => $employeeId,
            'valuation_date_updated' => now()
        ]);
    }

    public function updateStatus(string $status, string $reason = null): void
    {
        $this->update([
            'valuation_status' => $status,
            'valuation_status_reason' => $reason,
            'valuation_date_updated' => now()
        ]);
    }

    // Mutators
    public function setValuationEmailAttribute($value): void
    {
        $this->attributes['valuation_email'] = strtolower(trim($value));
    }

    public function setValuationEmail2Attribute($value): void
    {
        $this->attributes['valuation_email_2'] = strtolower(trim($value));
    }

    public function setValuationEmail3Attribute($value): void
    {
        $this->attributes['valuation_email_3'] = strtolower(trim($value));
    }

    public function setValuationEmail4Attribute($value): void
    {
        $this->attributes['valuation_email_4'] = strtolower(trim($value));
    }

    public function setValuationPhoneMobileAttribute($value): void
    {
        $this->attributes['valuation_phone_mobile'] = preg_replace('/[^0-9+]/', '', $value);
    }

    public function setValuationPhoneMobile2Attribute($value): void
    {
        $this->attributes['valuation_phone_mobile_2'] = preg_replace('/[^0-9+]/', '', $value);
    }

    public function setValuationPhoneMobile3Attribute($value): void
    {
        $this->attributes['valuation_phone_mobile_3'] = preg_replace('/[^0-9+]/', '', $value);
    }

    public function setValuationPhoneMobile4Attribute($value): void
    {
        $this->attributes['valuation_phone_mobile_4'] = preg_replace('/[^0-9+]/', '', $value);
    }

    // Boot method for model events
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($valuation) {
            if (!$valuation->valuation_date_created) {
                $valuation->valuation_date_created = now();
            }
        });

        static::updating(function ($valuation) {
            $valuation->valuation_date_updated = now();
        });
    }
}
