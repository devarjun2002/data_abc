<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    // Relationships
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'employee_branch_id', 'branch_id');
    }

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'employee_title', 'title_id');
    }

    public function defaultVehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'employee_default_vehicle_id', 'vehicle_id');
    }

    public function lineManager(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager', 'employee_id');
    }

    public function annualLeaveCover(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_annual_leave_cover', 'employee_id');
    }

    public function annualLeaveAccrualMethod(): BelongsTo
    {
        return $this->belongsTo(AnnualLeaveAccrualMethod::class, 'employee_annual_leave_accrual_method', 'annual_leave_accrual_method_id');
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(EmployeePermissions::class, 'employee_to_permissions', 'employee_id', 'employee_permissions_id');
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_employee', 'employee_id', 'property_id');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(EmployeeRole::class, 'employee_to_role', 'employee_id', 'employee_role_id');
    }

    public function departments(): BelongsToMany
    {
        return $this->belongsToMany(EmployeeDepartment::class, 'employee_to_department', 'employee_id', 'employee_department_id');
    }

    public function loginLogs(): HasMany
    {
        return $this->hasMany(EmployeeLoginLog::class, 'employee_id', 'employee_id');
    }

    public function mileage(): HasMany
    {
        return $this->hasMany(EmployeeMileage::class, 'employee_id', 'employee_id');
    }

    public function toPermissions(): HasMany
    {
        return $this->hasMany(EmployeeToPermissions::class, 'employee_id', 'employee_id');
    }

    public function toRoles(): HasMany
    {
        return $this->hasMany(EmployeeToRole::class, 'employee_id', 'employee_id');
    }

    public function toDepartments(): HasMany
    {
        return $this->hasMany(EmployeeToDepartment::class, 'employee_id', 'employee_id');
    }

    // Reverse relationships
    public function managedEmployees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_line_manager', 'employee_id');
    }

    public function annualLeaveCoveredEmployees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_annual_leave_cover', 'employee_id');
    }

    public function valuations(): HasMany
    {
        return $this->hasMany(Valuation::class, 'valuation_employee', 'employee_id');
    }

    public function negotiatedValuations(): HasMany
    {
        return $this->hasMany(Valuation::class, 'valuation_negotiator', 'employee_id');
    }

    public function createdInvoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_created_by', 'employee_id');
    }

    public function updatedInvoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_updated_by', 'employee_id');
    }

    public function postedInvoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_posted_by', 'employee_id');
    }

    public function createdInvoiceCredits(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_created_by', 'employee_id');
    }

    public function updatedInvoiceCredits(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_updated_by', 'employee_id');
    }

    public function postedInvoiceCredits(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_posted_by', 'employee_id');
    }

    public function createdTenantCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantCharge::class, 'tenant_charge_created_by', 'employee_id');
    }

    public function updatedTenantCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantCharge::class, 'tenant_charge_updated_by', 'employee_id');
    }

    public function createdBacsFiles(): HasMany
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_created_by', 'employee_id');
    }

    public function createdDirectories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_created_by', 'employee_id');
    }

    public function updatedDirectories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_updated_by', 'employee_id');
    }
}
