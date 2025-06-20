<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsRecurringFrequencyUnit extends Model
{
    protected $table = 'accounts_recurring_frequency_unit';
    protected $primaryKey = 'recurring_frequency_unit_id';
    public $timestamps = false;

    protected $fillable = [
        'recurring_frequency_unit_name',
        'recurring_frequency_unit_sort'
    ];

    protected $casts = [
        'recurring_frequency_unit_sort' => 'integer'
    ];

    /**
     * Get the recurring invoices that use this frequency unit.
     */
    public function recurringInvoices()
    {
        return $this->hasMany(AccountsInvoiceRecurring::class, 'invoice_recurring_frequency_unit');
    }
}
