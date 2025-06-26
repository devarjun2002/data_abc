<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DirectoryIndividual extends Model
{
    protected $table = 'directory_individual';
    protected $primaryKey = 'directory_individual_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'directory_individual_date_created' => 'datetime',
        'directory_individual_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'directory_individual_company',
        'directory_individual_title',
        'directory_individual_first_name',
        'directory_individual_surname',
        'directory_individual_phone_home',
        'directory_individual_phone_work',
        'directory_individual_phone_mobile',
        'directory_individual_fax',
        'directory_individual_email',
        'directory_individual_property_number_name',
        'directory_individual_apartment_number_name',
        'directory_individual_address_line_1',
        'directory_individual_address_line_2',
        'directory_individual_suburb',
        'directory_individual_town_city',
        'directory_individual_postcode',
        'directory_individual_country',
        'directory_individual_status',
        'directory_individual_notes',
        'directory_individual_bank_name',
        'directory_individual_bank_sort_code',
        'directory_individual_bank_account_number',
        'directory_individual_bank_account_name',
        'directory_individual_date_created',
        'directory_individual_date_updated',
        'directory_individual_created_by',
        'directory_individual_updated_by'
    ];

    // Relationships
    public function company(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'directory_individual_company', 'directory_id');
    }

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'directory_individual_title', 'title_id');
    }

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'directory_individual_bank_name', 'bank_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'directory_individual_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'directory_individual_updated_by', 'employee_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(DirectoryStatus::class, 'directory_individual_status', 'directory_status_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'directory_individual_country', 'country_id');
    }

    public function trades(): BelongsToMany
    {
        return $this->belongsToMany(DirectoryTrades::class, 'directory_to_trades', 'directory_id', 'directory_trades_id');
    }

    public function companyIndividuals(): HasMany
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_individual_id');
    }

    // Accessor for full name
    public function getFullNameAttribute(): string
    {
        return trim($this->directory_individual_first_name . ' ' . $this->directory_individual_surname);
    }

    // Accessor for full address
    public function getFullAddressAttribute(): string
    {
        $address = [];
        
        if ($this->directory_individual_property_number_name) {
            $address[] = $this->directory_individual_property_number_name;
        }
        
        if ($this->directory_individual_apartment_number_name) {
            $address[] = $this->directory_individual_apartment_number_name;
        }
        
        if ($this->directory_individual_address_line_1) {
            $address[] = $this->directory_individual_address_line_1;
        }
        
        if ($this->directory_individual_address_line_2) {
            $address[] = $this->directory_individual_address_line_2;
        }
        
        if ($this->directory_individual_suburb) {
            $address[] = $this->directory_individual_suburb;
        }
        
        if ($this->directory_individual_town_city) {
            $address[] = $this->directory_individual_town_city;
        }
        
        if ($this->directory_individual_postcode) {
            $address[] = $this->directory_individual_postcode;
        }
        
        return implode(', ', $address);
    }
}
