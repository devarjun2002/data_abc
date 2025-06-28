<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsTransactionType extends Model
{
    protected $table = 'accounts_transaction_type';
    protected $primaryKey = 'transaction_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'transaction_type_name',
        'transaction_type_statement_name'
    ];

    // Relationships --done
    public function transactions(): HasMany
    {
        return $this->hasMany(AccountsTransaction::class, 'transaction_type', 'transaction_type_id');
    }
}
