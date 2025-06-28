<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoiceCredit extends Model
{
    protected $table = 'accounts_invoice_credit';
    protected $primaryKey = 'invoice_credit_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'invoice_credit_date' => 'datetime',
        'invoice_credit_date_created' => 'datetime',
        'invoice_credit_date_updated' => 'datetime',
        'invoice_credit_date_posted' => 'datetime',
    ];

    protected $fillable = [
        'invoice_credit_token',
        'invoice_credit_customer_type',
        'invoice_credit_customer',
        'invoice_credit_date',
        'invoice_credit_property_id',
        'invoice_credit_development_id',
        'invoice_credit_tenancy_id',
        'invoice_credit_branch',
        'invoice_credit_notes',
        'invoice_credit_total_amount_exc_vat',
        'invoice_credit_total_vat_amount',
        'invoice_credit_posted',
        'invoice_credit_invoice_id',
        'invoice_credit_date_created',
        'invoice_credit_date_updated',
        'invoice_credit_date_posted',
        'invoice_credit_created_by',
        'invoice_credit_updated_by',
        'invoice_credit_posted_by'
    ];

    // Relationships --done
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'invoice_credit_branch', 'branch_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_credit_created_by', 'employee_id');
    }

    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'invoice_credit_customer_type', 'customer_type_id');
    }

    public function development()
    {
        return $this->belongsTo(Development::class, 'invoice_credit_development_id', 'development_id');
    }

    public function invoice()
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_credit_invoice_id', 'invoice_id');
    }

    public function postedBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_credit_posted_by', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'invoice_credit_property_id', 'property_id');
    }

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'invoice_credit_tenancy_id', 'tenancy_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_credit_updated_by', 'employee_id');
    }

    // Reverse relationships
    public function invoiceCreditLines()
    {
        return $this->hasMany(AccountsInvoiceCreditLine::class, 'invoice_credit_id', 'invoice_credit_id');
    }
}
