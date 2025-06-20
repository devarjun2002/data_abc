<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsLandlordPayment extends Model
{
    protected $table = 'accounts_landlord_payment';
    protected $primaryKey = 'landlord_payment_id';
    public $timestamps = false;
    protected $guarded = [];
}
