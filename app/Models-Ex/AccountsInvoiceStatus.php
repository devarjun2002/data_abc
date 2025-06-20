<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoiceStatus extends Model
{
    protected $table = 'accounts_invoice_status';
    protected $primaryKey = 'invoice_status_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_status_name'
    ];

    /**
     * Get the invoices with this status.
     */
    public function invoices()
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_status');
    }
}
