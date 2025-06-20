<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTransactionType extends Model
{
    protected $table = 'accounts_transaction_type';
    protected $primaryKey = 'transaction_type_id';
    public $timestamps = false;
    protected $fillable = [];

    public function transactions()
    {
        return $this->hasMany(AccountsTransaction::class, 'transaction_type_id', 'transaction_type_id');
    }
}
