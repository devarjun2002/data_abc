<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyDepositProtectionScheme extends Model
{
    protected $table = 'tenancy_deposit_protection_scheme';
    protected $primaryKey = 'tenancy_deposit_protection_scheme_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenancy_deposit_protection_scheme_name',
    ];
}
