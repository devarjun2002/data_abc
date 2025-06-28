<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsPaymentMethod extends Model
{
    protected $table = 'accounts_payment_method';
    protected $primaryKey = 'payment_method_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'payment_method_name'
    ];

    // Relationships --done
    public function invoicePayments(): HasMany
    {
        return $this->hasMany(AccountsInvoicePayment::class, 'invoice_payment_method', 'payment_method_id');
    }

    public function landlordPayments(): HasMany
    {
        return $this->hasMany(AccountsLandlordPayment::class, 'landlord_payment_method', 'payment_method_id');
    }

    public function tenantChargePayments(): HasMany
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'tenant_charge_payment_method', 'payment_method_id');
    }
}
