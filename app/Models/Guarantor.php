<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guarantor extends Model
{
    protected $table = 'guarantor';
    protected $primaryKey = 'guarantor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'guarantor_dob' => 'datetime',
        'guarantor_date_created' => 'datetime',
        'guarantor_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'guarantor_title',
        'guarantor_first_name',
        'guarantor_surname',
        'guarantor_phone_home',
        'guarantor_phone_work',
        'guarantor_phone_mobile',
        'guarantor_fax',
        'guarantor_email',
        'guarantor_property_number_name',
        'guarantor_apartment_number_name',
        'guarantor_address_line_1',
        'guarantor_address_line_2',
        'guarantor_suburb',
        'guarantor_town_city',
        'guarantor_postcode',
        'guarantor_country',
        'guarantor_dob',
        'guarantor_passport_number',
        'guarantor_notes',
        'guarantor_bank_name',
        'guarantor_bank_sort_code',
        'guarantor_bank_account_number',
        'guarantor_bank_account_name',
        'guarantor_date_created',
        'guarantor_date_updated',
        'guarantor_created_by',
        'guarantor_updated_by',
        'guarantor_online_login_username',
        'guarantor_online_login_password',
        'guarantor_nino',
        'guarantor_employment_status',
        'guarantor_employer_name',
        'guarantor_driving_licence_number',
        'guarantor_income',
        'guarantor_income_frequency',
        'guarantor_income_notes',
        'guarantor_online_account',
        'guarantor_referencing_provider',
        'guarantor_referencing_provider_reference',
        'guarantor_branch'
    ];

    // Relationships
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'guarantor_title', 'title_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'guarantor_country', 'country_id');
    }

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'guarantor_bank_name', 'bank_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'guarantor_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'guarantor_updated_by', 'employee_id');
    }

    public function employmentStatus(): BelongsTo
    {
        return $this->belongsTo(EmploymentStatus::class, 'guarantor_employment_status', 'employment_status_id');
    }

    public function incomeFrequency(): BelongsTo
    {
        return $this->belongsTo(IncomeFrequency::class, 'guarantor_income_frequency', 'income_frequency_id');
    }

    public function referencingProvider(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'guarantor_referencing_provider', 'directory_individual_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'guarantor_branch', 'branch_id');
    }

    public function incomes(): HasMany
    {
        return $this->hasMany(GuarantorIncome::class, 'guarantor_income_guarantor_id', 'guarantor_id');
    }

    public function applications(): HasMany
    {
        return $this->hasMany(ApplicationGuarantor::class, 'application_guarantor_guarantor_id', 'guarantor_id');
    }

    // Accessor for full name
    public function getFullNameAttribute(): string
    {
        return trim($this->guarantor_first_name . ' ' . $this->guarantor_surname);
    }

    // Accessor for full address
    public function getFullAddressAttribute(): string
    {
        $address = [];
        
        if ($this->guarantor_property_number_name) {
            $address[] = $this->guarantor_property_number_name;
        }
        
        if ($this->guarantor_apartment_number_name) {
            $address[] = $this->guarantor_apartment_number_name;
        }
        
        if ($this->guarantor_address_line_1) {
            $address[] = $this->guarantor_address_line_1;
        }
        
        if ($this->guarantor_address_line_2) {
            $address[] = $this->guarantor_address_line_2;
        }
        
        if ($this->guarantor_suburb) {
            $address[] = $this->guarantor_suburb;
        }
        
        if ($this->guarantor_town_city) {
            $address[] = $this->guarantor_town_city;
        }
        
        if ($this->guarantor_postcode) {
            $address[] = $this->guarantor_postcode;
        }
        
        return implode(', ', $address);
    }

    // Accessor for age
    public function getAgeAttribute(): ?int
    {
        if ($this->guarantor_dob) {
            return $this->guarantor_dob->age;
        }
        return null;
    }

    // Scope for active guarantors
    public function scopeActive($query)
    {
        return $query->where('guarantor_online_account', true);
    }

    // Scope for guarantors by branch
    public function scopeByBranch($query, $branchId)
    {
        return $query->where('guarantor_branch', $branchId);
    }
}
