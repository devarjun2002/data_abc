<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsNominalCode extends Model
{
    protected $table = 'accounts_nominal_code';
    protected $primaryKey = 'nominal_code_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'nominal_code_name',
        'nominal_code_type',
        'nominal_code_external_id',
        'nominal_code_default_vat_rate',
        'nominal_code_archive'
    ];

    // Relationships
    public function type(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCodeType::class, 'nominal_code_type', 'nominal_code_type_id');
    }

    public function defaultVatRate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'nominal_code_default_vat_rate', 'vat_rate_id');
    }
    
    public function transactions(): HasMany
    {
        return $this->hasMany(AccountsTransaction::class, 'nominal_code_id', 'nominal_code_id');
    }
    
    public function tenantChargePayments(): HasMany
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'nominal_code_id', 'nominal_code_id');
    }
    
    public function tenantDepositCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantDepositCharge::class, 'nominal_code_id', 'nominal_code_id');
    }

    // Reverse relationships
    public function bacsFiles(): HasMany
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_nominal_code', 'nominal_code_id');
    }

    public function directories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_nominal_code', 'nominal_code_id');
    }

    public function invoiceLines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    public function invoiceLineDescriptions(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLineDescription::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }
}
