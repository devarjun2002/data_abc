<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoicePaymentType extends Model
{
    protected $table = 'accounts_invoice_payment_type';
    protected $primaryKey = 'accounts_invoice_payment_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'accounts_invoice_payment_type_name'
    ];

    // Relationships --done
    public function invoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_payment_type', 'accounts_invoice_payment_type_id');
    }
}
