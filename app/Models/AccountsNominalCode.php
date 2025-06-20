<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsNominalCode extends Model
{
    protected $table = 'accounts_nominal_code';
    protected $primaryKey = 'nominal_code_id';
    public $timestamps = false;
    protected $fillable = [];

    public function type()
    {
        return $this->belongsTo(AccountsNominalCodeType::class, 'nominal_code_type', 'nominal_code_type_id');
    }
    
    public function transactions()
    {
        return $this->hasMany(AccountsTransaction::class, 'nominal_code_id', 'nominal_code_id');
    }
    
    public function tenantChargePayments()
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'nominal_code_id', 'nominal_code_id');
    }
    public function tenantDepositCharges()
    {
        return $this->hasMany(AccountsTenantDepositCharge::class, 'nominal_code_id', 'nominal_code_id');
    }
}
