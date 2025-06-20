<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsDepositAction extends Model
{
    protected $table = 'accounts_deposit_action';
    protected $primaryKey = 'deposit_action_id';
    public $timestamps = false;
    protected $guarded = [];
}
