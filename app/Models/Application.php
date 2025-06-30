<?php

namespace App\Models;
use App\Models\ApplicationStatus;
use App\Models\ApplicationType;
use App\Models\Bank;
use App\Models\Employee;
use App\Models\Property;
use App\Models\PropertyRoomLetting;
use App\Models\Title;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'application';
    protected $primaryKey = 'application_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'application_date_created' => 'datetime',
        'application_move_in_date' => 'datetime',
    ];

    protected $fillable = [
        'application_token',
        'application_property',
        'application_property_room',
        'application_move_in_date',
        'application_length_of_stay',
        'application_tenancy_length',
        'application_children',
        'application_pets',
        'application_moving_reason',
        'application_notes',
        'application_bank_name',
        'application_bank_account_name',
        'application_bank_sort_code',
        'application_bank_account_number',
        'application_status',
        'application_status_reason',
        'application_employee',
        'application_type',
        'application_company_years_trading',
        'application_company_nature',
        'application_business_address_history',
        'application_accountant_company_name',
        'application_accountant_title',
        'application_accountant_first_name',
        'application_accountant_surname',
        'application_accountant_telephone_numbers',
        'application_accountant_email_address',
        'application_accountant_address_line_1',
        'application_accountant_address_line_2',
        'application_accountant_town_city',
        'application_accountant_post_code',
        'application_solicitor_company_name',
        'application_solicitor_title',
        'application_solicitor_first_name',
        'application_solicitor_surname',
        'application_solicitor_telephone_numbers',
        'application_solicitor_email_address',
        'application_solicitor_address_line_1',
        'application_solicitor_address_line_2',
        'application_solicitor_town_city',
        'application_solicitor_post_code',
        'application_trade2_company_name',
        'application_trade2_title',
        'application_trade2_first_name',
        'application_trade2_surname',
        'application_trade2_telephone_numbers',
        'application_trade2_email_address',
        'application_trade2_address_line_1',
        'application_trade2_address_line_2',
        'application_trade2_town_city',
        'application_trade2_post_code',
        'application_trade_company_name',
        'application_trade_title',
        'application_trade_first_name',
        'application_trade_surname',
        'application_trade_telephone_numbers',
        'application_trade_email_address',
        'application_trade_address_line_1',
        'application_trade_address_line_2',
        'application_trade_town_city',
        'application_trade_post_code',
        'application_body_type',
        'application_landlord_solicitor_company',
        'application_landlord_solicitor_company_individual',
        'application_tenant_solicitor_company',
        'application_tenant_solicitor_company_individual',
        'application_date_created',
        'application_applicant_email_reminders',
        'application_holding_deposit_paid',
        'application_proceed',
        'application_can_physically_view'
    ];

    // Relationships --done
    public function accountantTitle()
    {
        return $this->belongsTo(Title::class, 'application_accountant_title', 'title_id');
    }

    public function bank() 
    {
        return $this->belongsTo(Bank::class, 'application_bank_name', 'bank_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'application_employee', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'application_property', 'property_id');
    }

    public function solicitorTitle()
    {
        return $this->belongsTo(Title::class, 'application_solicitor_title', 'title_id');
    }

    public function trade2Title()
    {
        return $this->belongsTo(Title::class, 'application_trade2_title', 'title_id');
    }

    public function tradeTitle()
    {
        return $this->belongsTo(Title::class, 'application_trade_title', 'title_id');
    }

    public function propertyRoom()
    {
        return $this->belongsTo(PropertyRoomLetting::class, 'application_property_room', 'property_room_letting_id');
    }

    public function status()
    {
        return $this->belongsTo(ApplicationStatus::class, 'application_status', 'application_status_id');
    }

    public function type()
    {
        return $this->belongsTo(ApplicationType::class, 'application_type', 'application_type_id');
    }
    // Reverse Relationships
public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_letting_application', 'application_id');
    }
}