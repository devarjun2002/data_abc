<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsVatRate extends Model
{
    protected $table = 'accounts_vat_rate';
    protected $primaryKey = 'vat_rate_id';
    public $timestamps = false;
    protected $fillable = [];
}
