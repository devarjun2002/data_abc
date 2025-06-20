<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsPaymentMethod extends Model
{
    protected $table = 'accounts_payment_method';
    protected $primaryKey = 'payment_method_id';
    public $timestamps = false;
    protected $guarded = [];

    public function invoicePayments()
    {
        return $this->hasMany(AccountsInvoicePayment::class, 'invoice_payment_method', 'payment_method_id');
    }
}
