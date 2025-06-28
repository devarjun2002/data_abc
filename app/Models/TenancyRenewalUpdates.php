<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyRenewalUpdates extends Model
{
    protected $table = 'tenancy_renewal_updates';
    protected $primaryKey = 'tenancy_renewal_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'tenancy_renewal_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'tenancy_renewal_updates_tenancy_id',
        'tenancy_renewal_updates_public_notes',
        'tenancy_renewal_updates_private_notes',
        'tenancy_renewal_updates_notify_landlord',
        'tenancy_renewal_updates_notify_tenants',
        'tenancy_renewal_updates_notify_accounts',
        'tenancy_renewal_updates_date_created',
        'tenancy_renewal_updates_created_by'
    ];

    // Relationships --done
    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_renewal_updates_tenancy_id', 'tenancy_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'tenancy_renewal_updates_created_by', 'employee_id');
    }
}
