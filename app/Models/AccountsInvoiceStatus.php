<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceStatus extends Model
{
    protected $table = 'accounts_invoice_status';
    protected $primaryKey = 'invoice_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'invoice_status_name'
    ];

    // Relationships --done
    public function invoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_status', 'invoice_status_id');
    }
}
