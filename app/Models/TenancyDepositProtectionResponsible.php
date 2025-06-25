<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyDepositProtectionResponsible extends Model
{
    protected $table = 'tenancy_deposit_protection_responsible';
    protected $primaryKey = 'tenancy_deposit_protection_responsible_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenancy_deposit_protection_responsible_name',
    ];
}
