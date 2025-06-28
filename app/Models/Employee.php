<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'employee_dob' => 'datetime',
        'employee_start_date' => 'datetime',
    ];

    protected $fillable = [
        'company_id',
        'employee_token',
        'employee_title',
        'employee_first_name',
        'employee_surname',
        'employee_mobile_number',
        'employee_mobile_number_work',
        'employee_direct_line',
        'employee_internal_extension',
        'employee_email_address',
        'employee_email_address_personal',
        'employee_job_title',
        'employee_branch_id',
        'employee_default_vehicle_id',
        'employee_username',
        'employee_password',
        'employee_status',
        'employee_payroll_status',
        'employee_login_status',
        'employee_dob',
        'employee_first_login_log',
        'employee_line_manager',
        'employee_line_manager_annual_leave',
        'employee_line_manager_first_login',
        'employee_email_password',
        'employee_holiday_allowance',
        'employee_negotiator_percentage_split',
        'employee_lunch_break',
        'employee_lunch_break_minutes',
        'employee_annual_leave_cover',
        'employee_working_hours',
        'employee_start_date',
        'employee_average_hours_worked_per_week',
        'employee_average_days_worked_per_week',
        'employee_annual_leave_active',
        'employee_annual_leave_accrual_method',
        'employee_hostname',
        'employee_image_filename',
        'employee_email_default_new_valuation_arranged'
    ];

    // Relationships --done
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'employee_branch_id', 'branch_id');
    }

    public function defaultVehicle() 
    {
        return $this->belongsTo(Vehicle::class, 'employee_default_vehicle_id', 'vehicle_id');
    }

    public function title()
    {
        return $this->belongsTo(Title::class, 'employee_title', 'title_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    public function lineManager()
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager', 'employee_id');
    }

    public function lineManagerAnnualLeave()
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager_annual_leave', 'employee_id');
    }

    public function lineManagerFirstLogin()
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager_first_login', 'employee_id');
    }

    public function annualLeaveCover()
    {
        return $this->belongsTo(Employee::class, 'employee_annual_leave_cover', 'employee_id');
    }

    public function annualLeaveAccrualMethod()
    {
        return $this->belongsTo(AnnualLeaveAccrualMethod::class, 'employee_annual_leave_accrual_method', 'annual_leave_accrual_method_id');
    }

    // Reverse relationships --done
    public function bacsFilesCreated()
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_created_by', 'employee_id');
    }

    public function createdInvoices()
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_created_by', 'employee_id');
    }

    public function postedInvoices()
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_posted_by', 'employee_id');
    }

    public function updatedInvoices()
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_updated_by', 'employee_id');
    }

    public function createdInvoiceCredits()
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_created_by', 'employee_id');
    }

    public function postedInvoiceCredits()
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_posted_by', 'employee_id');
    }

    public function updatedInvoiceCredits()
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_updated_by', 'employee_id');
    }
}
