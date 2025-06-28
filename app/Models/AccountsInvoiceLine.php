<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoiceLine extends Model
{
    protected $table = 'accounts_invoice_line';
    protected $primaryKey = 'invoice_line_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'invoice_id',
        'invoice_line_description',
        'invoice_line_amount',
        'invoice_line_vat_rate',
        'invoice_line_vat_amount',
        'invoice_line_nominal_code',
        'invoice_line_works_id'
    ];

    // Relationships --done
    public function invoice()
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_id', 'invoice_id');
    }

    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    public function vatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'invoice_line_vat_rate', 'vat_rate_id');
    }

    public function works()
    {
        return $this->belongsTo(Works::class, 'invoice_line_works_id', 'works_id');
    }
}
