<?php

namespace App\Models;
use App\Models\CustomerType;
use App\Models\Directory;
use App\Models\Employee;
use App\Models\Property;
use App\Models\ReferralSalePurchase;
use App\Models\ReferralStatus;
use App\Models\ReferralType;
use App\Models\Valuation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Referral extends Model
{
    protected $table = 'referral';
    protected $primaryKey = 'referral_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'referral_date_created' => 'datetime',
        'referral_date_updated' => 'datetime',
        'referral_commission_date_paid' => 'datetime',
    ];

    protected $fillable = [
        'referral_type',
        'referral_sale_purchase',
        'referral_customer_type',
        'referral_customer',
        'referral_customer_email',
        'referral_directory_company',
        'referral_property',
        'referral_valuation',
        'referral_notes',
        'referral_notes_private',
        'referral_notes_directory_company',
        'referral_employee',
        'referral_status',
        'referral_commission_our_invoice_ref',
        'referral_commission_amount',
        'referral_commission_date_paid',
        'referral_total_amount_paid',
        'referral_total_number_of_payments',
        'referral_total_amount_paid_employee',
        'referral_total_number_of_payments_employee',
        'referral_date_created',
        'referral_date_updated',
        'referral_created_by',
        'referral_updated_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'referral_created_by', 'employee_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'referral_employee', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'referral_updated_by', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'referral_property', 'property_id');
    }

    public function valuation()
    {
        return $this->belongsTo(Valuation::class, 'referral_valuation', 'valuation_id');
    }

    public function type()
    {
        return $this->belongsTo(ReferralType::class, 'referral_type', 'referral_type_id');
    }

    public function salePurchase()
    {
        return $this->belongsTo(ReferralSalePurchase::class, 'referral_sale_purchase', 'referral_sale_purchase_id');
    }

    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'referral_customer_type', 'customer_type_id');
    }

    public function directoryCompany()
    {
        return $this->belongsTo(Directory::class, 'referral_directory_company', 'directory_id');
    }

    public function status()
    {
        return $this->belongsTo(ReferralStatus::class, 'referral_status', 'referral_status_id');
    }
    // Reverse Relationships
public function referralUpdateses()
    {
        return $this->hasMany(ReferralUpdates::class, 'referral_updates_referral_id', 'referral_id');
    }
}