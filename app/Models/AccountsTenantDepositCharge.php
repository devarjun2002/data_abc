<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantDepositCharge extends Model
{
    protected $table = 'accounts_tenant_deposit_charge';
    protected $primaryKey = 'tenant_deposit_charge_id';
    public $timestamps = false;
    protected $fillable = [];

    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'nominal_code_id', 'nominal_code_id');
    }
}
