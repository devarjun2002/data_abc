<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    protected $table = 'customer_type';
    protected $primaryKey = 'customer_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'customer_type_name',
        'customer_type_description',
        'customer_type_description2',
        'customer_type_description3',
        'customer_type_filename',
        'customer_type_url_search_parameter'
    ];

    // Reverse relationships --done
    public function invoices()
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_customer_type', 'customer_type_id');
    }

    public function invoiceCredits()
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_customer_type', 'customer_type_id');
    }
}
