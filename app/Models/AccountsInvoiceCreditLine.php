<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoiceCreditLine extends Model
{
    protected $table = 'accounts_invoice_credit_line';
    protected $primaryKey = 'invoice_credit_line_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'invoice_credit_id',
        'invoice_credit_line_description',
        'invoice_credit_line_amount',
        'invoice_credit_line_vat_rate',
        'invoice_credit_line_vat_amount',
        'invoice_credit_line_nominal_code'
    ];

    // Relationships --done
    public function invoiceCredit()
    {
        return $this->belongsTo(AccountsInvoiceCredit::class, 'invoice_credit_id', 'invoice_credit_id');
    }

    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_credit_line_nominal_code', 'nominal_code_id');
    }

    public function vatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'invoice_credit_line_vat_rate', 'vat_rate_id');
    }

    // Reverse relationships
}