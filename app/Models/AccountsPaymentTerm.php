<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsPaymentTerm extends Model
{
    protected $table = 'accounts_payment_term';
    protected $primaryKey = 'payment_term_id';
    public $timestamps = false;
    protected $fillable = [];
}
