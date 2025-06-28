<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceUpdates extends Model
{
    protected $table = 'invoice_updates';
    protected $primaryKey = 'invoice_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'invoice_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'invoice_updates_invoice_id',
        'invoice_updates_private_notes',
        'invoice_updates_date_created',
        'invoice_updates_created_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'invoice_updates_created_by', 'employee_id');
    }

    public function invoice()
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_updates_invoice_id', 'invoice_id');
    }
}
