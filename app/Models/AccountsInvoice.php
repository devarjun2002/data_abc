<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoice extends Model
{
    protected $table = 'accounts_invoice';
    protected $primaryKey = 'invoice_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'invoice_token',
        'invoice_customer_type',
        'invoice_customer',
        'invoice_date',
        'invoice_due_date',
        'invoice_property_id',
        'invoice_development_id',
        'invoice_tenancy_id',
        'invoice_branch',
        'invoice_payment_terms',
        'invoice_notes',
        'invoice_total_amount_exc_vat',
        'invoice_total_vat_amount',
        'invoice_total_amount_paid',
        'invoice_posted',
        'invoice_overdue_reminders',
        'invoice_date_created',
        'invoice_date_updated',
        'invoice_date_posted',
        'invoice_created_by',
        'invoice_updated_by',
        'invoice_posted_by'
    ];

    // Relationships
    public function customerType(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'invoice_customer_type', 'customer_type_id');
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'invoice_customer', 'directory_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'invoice_property_id', 'property_id');
    }

    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'invoice_development_id', 'development_id');
    }

    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'invoice_tenancy_id', 'tenancy_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'invoice_branch', 'branch_id');
    }

    public function paymentTerms(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'invoice_payment_terms', 'accounts_payment_term_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_updated_by', 'employee_id');
    }

    public function postedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_posted_by', 'employee_id');
    }

    // Reverse relationships
    public function invoiceCredits(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_invoice_id', 'invoice_id');
    }

    public function invoicePayments(): HasMany
    {
        return $this->hasMany(AccountsInvoicePayment::class, 'invoice_payment_invoice_id', 'invoice_id');
    }

    public function invoiceLineDescriptions(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLineDescription::class, 'invoice_line_description_invoice_id', 'invoice_id');
    }

    public function invoiceRecurring(): HasMany
    {
        return $this->hasMany(AccountsInvoiceRecurring::class, 'invoice_recurring_invoice_id', 'invoice_id');
    }

    public function invoiceUpdates(): HasMany
    {
        return $this->hasMany(InvoiceUpdates::class, 'invoice_updates_invoice_id', 'invoice_id');
    }
}
