<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTransaction extends Model
{
    protected $table = 'accounts_transaction';
    protected $primaryKey = 'transaction_id';
    public $timestamps = false;
    protected $fillable = [];

    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'nominal_code_id', 'nominal_code_id');
    }
    public function transactionType()
    {
        return $this->belongsTo(AccountsTransactionType::class, 'transaction_type_id', 'transaction_type_id');
    }
}
