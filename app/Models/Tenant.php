<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $table = 'tenant';
    protected $primaryKey = 'tenant_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'tenant_token',
        'tenant_title',
        'tenant_first_name',
        'tenant_surname',
        'tenant_mobile_number',
        'tenant_phone_number',
        'tenant_email_address',
        'tenant_dob',
        'tenant_nationality',
        'tenant_employment_status',
        'tenant_income_frequency',
        'tenant_income_amount',
        'tenant_bank_name',
        'tenant_bank_sort_code',
        'tenant_bank_account_number',
        'tenant_address_line_1',
        'tenant_address_line_2',
        'tenant_suburb',
        'tenant_town_city',
        'tenant_postcode',
        'tenant_country',
        'tenant_notes',
        'tenant_date_created',
        'tenant_date_updated',
        'tenant_created_by',
        'tenant_updated_by'
    ];

    public function propertyRoomLettings()
    {
        return $this->belongsToMany(PropertyRoomLetting::class, 'property_room_letting_tenant', 'tenant_id', 'property_room_letting_id');
    }
}
