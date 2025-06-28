<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsVatRate extends Model
{
    protected $table = 'accounts_vat_rate';
    protected $primaryKey = 'vat_rate_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'vat_rate_amount',
        'vat_rate_name',
        'vat_rate_description',
        'vat_rate_multiplier',
        'vat_rate_external_id'
    ];

    // Reverse relationships --done
    public function bacsFiles()
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_vat_rate', 'vat_rate_id');
    }

    public function directories()
    {
        return $this->hasMany(Directory::class, 'directory_vat_rate', 'vat_rate_id');
    }

    public function nominalCodes()
    {
        return $this->hasMany(AccountsNominalCode::class, 'nominal_code_default_vat_rate', 'vat_rate_id');
    }

    public function invoiceLines()
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_vat_rate', 'vat_rate_id');
    }

    public function invoiceCreditLines()
    {
        return $this->hasMany(AccountsInvoiceCreditLine::class, 'invoice_credit_line_vat_rate', 'vat_rate_id');
    }
}
