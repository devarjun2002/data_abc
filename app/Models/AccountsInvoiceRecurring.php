<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsInvoiceRecurring extends Model
{
    protected $table = 'accounts_invoice_recurring';
    protected $primaryKey = 'invoice_recurring_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'invoice_recurring_start_date' => 'datetime',
        'invoice_recurring_next_processing_date' => 'datetime',
    ];

    protected $fillable = [
        'invoice_recurring_invoice_id',
        'invoice_recurring_frequency',
        'invoice_recurring_frequency_unit',
        'invoice_recurring_start_date',
        'invoice_recurring_next_processing_date',
        'invoice_recurring_suspended'
    ];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_recurring_invoice_id', 'invoice_id');
    }

    public function frequencyUnit(): BelongsTo
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'invoice_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }
}
