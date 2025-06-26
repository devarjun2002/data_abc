<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $table = 'tenant';
    protected $primaryKey = 'tenant_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'tenant_date_created' => 'datetime',
        'tenant_date_updated' => 'datetime',
        'tenant_dob' => 'datetime',
        'tenant_right_to_rent_review_date' => 'datetime',
    ];

    protected $fillable = [
        'tenant_token',
        'tenant_type',
        'tenant_title',
        'tenant_first_name',
        'tenant_surname',
        'tenant_company_name',
        'tenant_company_trading_name',
        'tenant_company_contact_name',
        'tenant_company_registration_number',
        'tenant_company_vat_registration_number',
        'tenant_phone_home',
        'tenant_phone_work',
        'tenant_phone_mobile',
        'tenant_fax',
        'tenant_email',
        'tenant_email_accounts',
        'tenant_email_works',
        'tenant_property_number_name',
        'tenant_apartment_number_name',
        'tenant_address_line_1',
        'tenant_address_line_2',
        'tenant_suburb',
        'tenant_town_city',
        'tenant_postcode',
        'tenant_country',
        'tenant_forwarding_property_number_name',
        'tenant_forwarding_apartment_number_name',
        'tenant_forwarding_address_line_1',
        'tenant_forwarding_address_line_2',
        'tenant_forwarding_suburb',
        'tenant_forwarding_town_city',
        'tenant_forwarding_postcode',
        'tenant_forwarding_country',
        'tenant_dob',
        'tenant_passport_number',
        'tenant_notes',
        'tenant_bank_name',
        'tenant_bank_sort_code',
        'tenant_bank_account_number',
        'tenant_bank_account_name',
        'tenant_date_created',
        'tenant_date_updated',
        'tenant_created_by',
        'tenant_updated_by',
        'tenant_online_account',
        'tenant_online_login_username',
        'tenant_online_login_password',
        'tenant_online_account_password_reset_token',
        'tenant_nino',
        'tenant_employment_status',
        'tenant_employer_name',
        'tenant_income',
        'tenant_income_frequency',
        'tenant_driving_licence_number',
        'tenant_employment_income_notes',
        'tenant_referencing_provider',
        'tenant_referencing_provider_reference',
        'tenant_branch',
        'tenant_right_to_rent_review_date'
    ];

    public function propertyRoomLettings()
    {
        return $this->belongsToMany(PropertyRoomLetting::class, 'property_room_letting_tenant', 'tenant_id', 'property_room_letting_id');
    }
}
