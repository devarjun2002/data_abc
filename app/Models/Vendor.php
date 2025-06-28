<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor';
    protected $primaryKey = 'vendor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'vendor_date_created' => 'datetime',
        'vendor_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'vendor_token',
        'vendor_type',
        'vendor_title',
        'vendor_first_name',
        'vendor_surname',
        'vendor_trading_name',
        'vendor_company_name',
        'vendor_company_trading_name',
        'vendor_company_contact_name',
        'vendor_company_registration_number',
        'vendor_company_vat_registration_number',
        'vendor_company_reg_office_property_number_name',
        'vendor_company_reg_office_address_line_1',
        'vendor_company_reg_office_address_line_2',
        'vendor_company_reg_office_suburb',
        'vendor_company_reg_office_town_city',
        'vendor_company_reg_office_postcode',
        'vendor_company_reg_office_country',
        'vendor_phone_home',
        'vendor_phone_work',
        'vendor_phone_mobile',
        'vendor_fax',
        'vendor_email',
        'vendor_property_number_name',
        'vendor_apartment_number_name',
        'vendor_address_line_1',
        'vendor_address_line_2',
        'vendor_suburb',
        'vendor_town_city',
        'vendor_postcode',
        'vendor_country',
        'vendor_bank_name',
        'vendor_bank_sort_code',
        'vendor_bank_account_number',
        'vendor_bank_account_name',
        'vendor_status',
        'vendor_lead_source',
        'vendor_notes',
        'vendor_online_account',
        'vendor_online_login_username',
        'vendor_online_login_password',
        'vendor_online_account_password_reset_token',
        'vendor_dob',
        'vendor_passport_number',
        'vendor_driving_licence_number',
        'vendor_nino',
        'vendor_sole_sale_fee',
        'vendor_sole_sale_fee_type',
        'vendor_multi_sale_fee',
        'vendor_multi_sale_fee_type',
        'vendor_date_created',
        'vendor_date_updated',
        'vendor_created_by',
        'vendor_updated_by',
        'vendor_solicitor_company',
        'vendor_solicitor_company_individual',
        'vendor_branch',
        'vendor_mailing_list',
        'vendor_fees_notes',
        'vendor_capacity',
        'vendor_deceased',
        'vendor_emails_new_viewing',
        'vendor_emails_edit_viewing',
        'vendor_emails_feedback',
        'vendor_emails_property_performance_review',
        'vendor_emails_new_offer',
        'vendor_emails_edit_offer'
    ];

    // Relationships --done
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'vendor_bank_name');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'vendor_branch');
    }

    public function companyRegOfficeCountry()
    {
        return $this->belongsTo(Country::class, 'vendor_company_reg_office_country');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'vendor_country');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'vendor_created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'vendor_updated_by');
    }

    public function title()
    {
        return $this->belongsTo(Title::class, 'vendor_title');
    }

    public function type()
    {
        return $this->belongsTo(BodyType::class, 'vendor_type');
    }

    public function status()
    {
        return $this->belongsTo(VendorStatus::class, 'vendor_status');
    }

    public function soleSaleFeeType()
    {
        return $this->belongsTo(FeeType::class, 'vendor_sole_sale_fee_type');
    }

    public function multiSaleFeeType()
    {
        return $this->belongsTo(FeeType::class, 'vendor_multi_sale_fee_type');
    }

    public function solicitorCompany()
    {
        return $this->belongsTo(Directory::class, 'vendor_solicitor_company');
    }

    public function solicitorIndividual()
    {
        return $this->belongsTo(DirectoryIndividual::class, 'vendor_solicitor_company_individual');
    }

    public function capacity()
    {
        return $this->belongsTo(Capacity::class, 'vendor_capacity');
    }
}
