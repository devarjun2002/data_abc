<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoicePaymentType extends Model
{
    protected $table = 'accounts_invoice_payment_type';
    protected $primaryKey = 'accounts_invoice_payment_type_id';
    public $timestamps = false;
    protected $guarded = [];

    public function invoicePayments()
    {
        return $this->hasMany(AccountsInvoicePayment::class, 'invoice_payment_type', 'accounts_invoice_payment_type_id');
    }
}
