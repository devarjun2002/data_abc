<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantChargePayment extends Model
{
    protected $table = 'accounts_tenant_charge_payment';
    protected $primaryKey = 'tenant_charge_payment_id';
    public $timestamps = false;
    protected $fillable = [];

    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'nominal_code_id', 'nominal_code_id');
    }
}
