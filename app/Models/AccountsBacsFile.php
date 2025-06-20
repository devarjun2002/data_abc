<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsBacsFile extends Model
{
    protected $table = 'accounts_bacs_file';
    protected $primaryKey = 'bacs_file_id';
    public $timestamps = false;
    protected $guarded = [];

    // Relations
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'bacs_file_created_by', 'employee_id');
    }
    public function directory()
    {
        return $this->belongsTo(Directory::class, 'bacs_file_directory_id', 'directory_id');
    }
    public function invoicePayment()
    {
        return $this->belongsTo(AccountsInvoicePayment::class, 'bacs_file_invoice_payment_reference', 'invoice_id');
    }
    public function landlordPayment()
    {
        return $this->belongsTo(AccountsLandlordPayment::class, 'bacs_file_landlord_payment_reference', 'landlord_payment_id');
    }
    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'bacs_file_nominal_code', 'nominal_code_id');
    }
    public function vatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'bacs_file_vat_rate', 'vat_rate_id');
    }
}
