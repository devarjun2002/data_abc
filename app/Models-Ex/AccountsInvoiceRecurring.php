<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoiceRecurring extends Model
{
    protected $table = 'accounts_invoice_recurring';
    protected $primaryKey = 'invoice_recurring_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_recurring_invoice_id',
        'invoice_recurring_frequency',
        'invoice_recurring_frequency_unit',
        'invoice_recurring_start_date',
        'invoice_recurring_next_processing_date',
        'invoice_recurring_suspended'
    ];

    protected $casts = [
        'invoice_recurring_frequency' => 'integer',
        'invoice_recurring_start_date' => 'date',
        'invoice_recurring_next_processing_date' => 'date',
        'invoice_recurring_suspended' => 'boolean'
    ];

    /**
     * Get the invoice this recurring entry is for.
     */
    public function invoice()
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_recurring_invoice_id');
    }

    /**
     * Get the frequency unit for this recurring invoice.
     */
    public function frequencyUnit()
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'invoice_recurring_frequency_unit');
    }
}
