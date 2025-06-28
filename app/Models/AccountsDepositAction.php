<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsDepositAction extends Model
{
    protected $table = 'accounts_deposit_action';
    protected $primaryKey = 'deposit_action_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'deposit_action_name',
        'deposit_action_sort',
        'deposit_action_archived'
    ];
}
