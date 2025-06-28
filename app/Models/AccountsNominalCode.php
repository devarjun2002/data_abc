<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsNominalCode extends Model
{
    protected $table = 'accounts_nominal_code';
    protected $primaryKey = 'nominal_code_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'nominal_code_name',
        'nominal_code_type',
        'nominal_code_external_id',
        'nominal_code_default_vat_rate',
        'nominal_code_archive'
    ];

    // Relationships --done
    public function vatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'nominal_code_default_vat_rate', 'vat_rate_id');
    }

    public function nominalCodeType() 
    {
        return $this->belongsTo(AccountsNominalCodeType::class, 'nominal_code_type', 'nominal_code_type_id');
    }

    public function invoiceLines()
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    public function invoiceLineDescriptions()
    {
        return $this->hasMany(AccountsInvoiceLineDescription::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    // Reverse relationships --done
    public function bacsFiles()
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_nominal_code', 'nominal_code_id');
    }

    public function invoiceCreditLines()
    {
        return $this->hasMany(AccountsInvoiceCreditLine::class, 'invoice_credit_line_nominal_code', 'nominal_code_id');
    }
}
