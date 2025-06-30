<?php

namespace App\Models;
use App\Models\AccountsInvoice;
use App\Models\AccountsInvoiceCredit;
use App\Models\AccountsInvoicePaymentType;
use App\Models\AccountsPaymentMethod;
use App\Models\Employee;
use App\Models\Tenancy;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoicePayment extends Model
{
    protected $table = 'accounts_invoice_payment';
    protected $primaryKey = 'invoice_payment_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'invoice_payment_date' => 'datetime',
        'invoice_payment_date_created' => 'datetime',
        'invoice_payment_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'invoice_payment_date',
        'invoice_payment_amount',
        'invoice_payment_method',
        'invoice_payment_invoice_id',
        'invoice_payment_notes',
        'invoice_payment_type',
        'invoice_payment_type_id',
        'invoice_payment_use_balance',
        'invoice_payment_tenancy_id',
        'invoice_payment_date_created',
        'invoice_payment_date_updated',
        'invoice_payment_created_by',
        'invoice_payment_updated_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_payment_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_payment_updated_by', 'employee_id');
    }

    public function invoice()
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_payment_invoice_id', 'invoice_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'invoice_payment_method', 'payment_method_id');
    }

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'invoice_payment_tenancy_id', 'tenancy_id');
    }

    public function paymentType()
    {
        return $this->belongsTo(AccountsInvoicePaymentType::class, 'invoice_payment_type', 'accounts_invoice_payment_type_id');
    }

    public function invoiceCredit()
    {
        return $this->belongsTo(AccountsInvoiceCredit::class, 'invoice_payment_type_id', 'invoice_credit_id');
    }
    // Reverse Relationships
public function accountsBacsFiles()
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_invoice_payment_reference', 'invoice_payment_id');
    }
}