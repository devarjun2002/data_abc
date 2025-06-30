<?php

namespace App\Models;
use App\Models\AccountsVatRate;
use App\Models\Country;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'company_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'company_lock_date' => 'datetime',
    ];

    protected $fillable = [
        'company_token',
        'company_legal_name',
        'company_trading_name',
        'company_registration_number',
        'company_default_vat_rate',
        'company_vat_registration_number',
        'company_reg_office_property_number_name',
        'company_reg_office_address_line_1',
        'company_reg_office_address_line_2',
        'company_reg_office_suburb',
        'company_reg_office_town_city',
        'company_reg_office_postcode',
        'company_reg_office_country',
        'company_property_number_name',
        'company_address_line_1',
        'company_address_line_2',
        'company_suburb',
        'company_town_city',
        'company_postcode',
        'company_country',
        'company_phone_number',
        'company_fax_number',
        'company_email',
        'company_website',
        'company_website_display',
        'company_lock_date'
    ];

    // Relationships --done
    public function defaultVatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'company_default_vat_rate', 'vat_rate_id');
    }

    public function regOfficeCountry()
    {
        return $this->belongsTo(Country::class, 'company_reg_office_country', 'country_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'company_country', 'country_id');
    }
    // Reverse Relationships
public function employees()
    {
        return $this->hasMany(Employee::class, 'company_id', 'company_id');
    }
}