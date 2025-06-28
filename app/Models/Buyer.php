<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $table = 'buyer';
    protected $primaryKey = 'buyer_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'buyer_date_created' => 'datetime',
        'buyer_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'buyer_token',
        'buyer_type',
        'buyer_title',
        'buyer_first_name',
        'buyer_surname',
        'buyer_trading_name',
        'buyer_company_name',
        'buyer_company_trading_name',
        'buyer_company_contact_name',
        'buyer_company_registration_number',
        'buyer_company_vat_registration_number',
        'buyer_company_reg_office_property_number_name',
        'buyer_company_reg_office_address_line_1',
        'buyer_company_reg_office_address_line_2',
        'buyer_company_reg_office_suburb',
        'buyer_company_reg_office_town_city',
        'buyer_company_reg_office_postcode',
        'buyer_company_reg_office_country',
        'buyer_phone_home',
        'buyer_phone_work',
        'buyer_phone_mobile',
        'buyer_fax',
        'buyer_email',
        'buyer_property_number_name',
        'buyer_apartment_number_name',
        'buyer_address_line_1',
        'buyer_address_line_2',
        'buyer_suburb',
        'buyer_town_city',
        'buyer_postcode',
        'buyer_country',
        'buyer_notes',
        'buyer_bank_name',
        'buyer_bank_sort_code',
        'buyer_bank_account_number',
        'buyer_bank_account_name',
        'buyer_online_account',
        'buyer_online_login_username',
        'buyer_online_login_password',
        'buyer_online_account_password_reset_token',
        'buyer_dob',
        'buyer_passport_number',
        'buyer_driving_licence_number',
        'buyer_nino',
        'buyer_date_created',
        'buyer_date_updated',
        'buyer_created_by',
        'buyer_updated_by',
        'buyer_solicitor_company',
        'buyer_solicitor_company_individual',
        'buyer_estate_agent_company',
        'buyer_estate_agent_company_individual',
        'buyer_branch',
        'buyer_source',
    ];

    // Relationships --done
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'buyer_bank_name', 'bank_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'buyer_branch', 'branch_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'buyer_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'buyer_updated_by', 'employee_id');
    }

    public function title()
    {
        return $this->belongsTo(Title::class, 'buyer_title', 'title_id');
    }

    public function bodyType()
    {
        return $this->belongsTo(BodyType::class, 'buyer_type', 'body_type_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'buyer_country', 'country_id');
    }

    public function companyRegOfficeCountry()
    {
        return $this->belongsTo(Country::class, 'buyer_company_reg_office_country', 'country_id');
    }
}
