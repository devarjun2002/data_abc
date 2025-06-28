<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    protected $table = 'country';
    protected $primaryKey = 'country_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'country_name',
        'country_code',
    ];

    // Relationships --done
    public function companies(): HasMany
    {
        return $this->hasMany(Company::class, 'company_country', 'country_id');
    }

    public function regOfficeCompanies(): HasMany
    {
        return $this->hasMany(Company::class, 'company_reg_office_country', 'country_id');
    }

    public function branches(): HasMany
    {
        return $this->hasMany(Branch::class, 'branch_country', 'country_id');
    }

    public function landlords(): HasMany
    {
        return $this->hasMany(Landlord::class, 'landlord_country', 'country_id');
    }

    public function directoryIndividuals(): HasMany
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_country', 'country_id');
    }

    public function directories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_country', 'country_id');
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_country', 'country_id', 'property_id');
    }

    public function applicants(): HasMany
    {
        return $this->hasMany(Applicant::class, 'applicant_country', 'country_id');
    }

    public function valuations(): HasMany
    {
        return $this->hasMany(Valuation::class, 'valuation_property_country', 'country_id');
    }
}

//filament