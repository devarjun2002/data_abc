<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoice extends Model
{
    protected $table = 'accounts_invoice';
    protected $primaryKey = 'invoice_id';
    public $timestamps = false;

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

    protected $casts = [
        'invoice_total_amount_exc_vat' => 'decimal:2',
        'invoice_total_vat_amount' => 'decimal:2',
        'invoice_total_amount_paid' => 'decimal:2',
        'invoice_posted' => 'boolean',
        'invoice_overdue_reminders' => 'boolean',
        'invoice_date' => 'date',
        'invoice_due_date' => 'date',
        'invoice_date_created' => 'datetime',
        'invoice_date_updated' => 'datetime',
        'invoice_date_posted' => 'datetime'
    ];

    /**
     * Get the customer type of this invoice.
     */
    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'invoice_customer_type');
    }

    /**
     * Get the property associated with this invoice.
     */
    public function property()
    {
        return $this->belongsTo(Property::class, 'invoice_property_id');
    }

    /**
     * Get the development associated with this invoice.
     */
    public function development()
    {
        return $this->belongsTo(Development::class, 'invoice_development_id');
    }

    /**
     * Get the tenancy associated with this invoice.
     */
    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'invoice_tenancy_id');
    }

    /**
     * Get the branch associated with this invoice.
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'invoice_branch');
    }

    /**
     * Get the payment terms for this invoice.
     */
    public function paymentTerms()
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'invoice_payment_terms');
    }

    /**
     * Get the employee who created this invoice.
     */
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_created_by');
    }

    /**
     * Get the employee who updated this invoice.
     */
    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_updated_by');
    }

    /**
     * Get the employee who posted this invoice.
     */
    public function postedBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_posted_by');
    }
}
