<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyRenewalUpdates extends Model
{
    protected $table = 'tenancy_renewal_updates';
    protected $primaryKey = 'tenancy_renewal_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenancy_renewal_updates_public_notes',
        'tenancy_renewal_updates_private_notes',
        'tenancy_renewal_updates_notify_landlord',
        'tenancy_renewal_updates_notify_tenants',
        'tenancy_renewal_updates_notify_accounts',
    ];
}
