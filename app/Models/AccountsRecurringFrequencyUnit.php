<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsRecurringFrequencyUnit extends Model
{
    protected $table = 'accounts_recurring_frequency_unit';
    protected $primaryKey = 'recurring_frequency_unit_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'recurring_frequency_unit_name',
        'recurring_frequency_unit_sort'
    ];

    // Relationships --done
    public function recurringInvoices()
    {
        return $this->hasMany(AccountsInvoiceRecurring::class, 'invoice_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }
    // Reverse Relationships
public function calendarEventRecurrings()
    {
        return $this->hasMany(CalendarEventRecurring::class, 'calendar_event_recurring_frequency_unit', 'accounts_recurring_frequency_unit_id');
    }
}