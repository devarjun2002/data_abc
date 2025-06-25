<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceLineDescription extends Model
{
    protected $table = 'accounts_invoice_line_description';
    protected $primaryKey = 'invoice_line_description_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'invoice_line_description_name',
        'invoice_line_description_sort',
        'invoice_line_nominal_code',
        'invoice_line_description_category',
        'invoice_line_description_amount'
    ];

    // Relationships
    public function category(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoiceLineDescriptionCategory::class, 'invoice_line_description_category', 'invoice_line_description_category_id');
    }

    public function nominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    // Reverse relationships
    public function invoiceLines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_description_id', 'invoice_line_description_id');
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_line_description_id', 'invoice_line_description_id');
    }
}
