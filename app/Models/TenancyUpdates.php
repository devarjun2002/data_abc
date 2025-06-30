<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Tenancy;

use Illuminate\Database\Eloquent\Model;

class TenancyUpdates extends Model
{
    protected $table = 'tenancy_updates';
    protected $primaryKey = 'tenancy_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'tenancy_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'tenancy_updates_tenancy_id',
        'tenancy_updates_public_notes',
        'tenancy_updates_private_notes',
        'tenancy_updates_notify_landlord',
        'tenancy_updates_notify_tenants',
        'tenancy_updates_notify_accounts',
        'tenancy_updates_date_created',
        'tenancy_updates_created_by'
    ];

    // Relationships --done
    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_updates_tenancy_id', 'tenancy_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'tenancy_updates_created_by', 'employee_id');
    }
}
