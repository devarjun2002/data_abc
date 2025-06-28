<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsPaymentTerm extends Model
{
    protected $table = 'accounts_payment_term';
    protected $primaryKey = 'accounts_payment_term_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'accounts_payment_term_description',
        'accounts_payment_term_sort'
    ];

    // Reverse relationships
    public function invoices()
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_payment_terms', 'accounts_payment_term_id');
    }
}
