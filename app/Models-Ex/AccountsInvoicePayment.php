<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoicePayment extends Model
{
    protected $table = 'accounts_invoice_payment';
    protected $primaryKey = 'invoice_payment_id';
    public $timestamps = false;
    protected $guarded = [];

    public function paymentMethod()
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'invoice_payment_method', 'payment_method_id');
    }
    public function paymentType()
    {
        return $this->belongsTo(AccountsInvoicePaymentType::class, 'invoice_payment_type', 'accounts_invoice_payment_type_id');
    }
    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'invoice_payment_tenancy_id', 'tenancy_id');
    }
}
