<?php

namespace App\Models;
use App\Models\Branch;
use App\Models\ContractType;
use App\Models\Country;
use App\Models\Employee;
use App\Models\PropertyStatus;
use App\Models\PropertyType;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';
    protected $primaryKey = 'property_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_token',
        'property_availability',
        'property_letting_service',
        'property_letting_available_from',
        'property_letting_furnished_status',
        'property_letting_pets',
        'property_letting_smoking',
        'property_category',
        'property_type',
        'property_address_line_1',
        'property_postcode',
        'property_country',
        'property_status',
        'property_created_by',
        'property_updated_by',
        'property_branch',
        'property_price',
        'property_contract_type',
        'property_latitude',
        'property_longitude',
        'property_summary',
        'property_description'
    ];

    // Relationships -done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'property_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'property_updated_by', 'employee_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'property_branch', 'branch_id');
    }

    public function status()
    {
        return $this->belongsTo(PropertyStatus::class, 'property_status', 'property_status_id');
    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class, 'property_type', 'property_type_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'property_country', 'country_id');
    }

    public function contractType()
    {
        return $this->belongsTo(ContractType::class, 'property_contract_type', 'contract_type_id');
    }
    // Reverse Relationships
public function tenancyTenantses()
    {
        return $this->hasMany(TenancyTenants::class, 'property_id', 'property_id');
    }
}