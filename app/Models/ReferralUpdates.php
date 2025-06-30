<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Referral;

use Illuminate\Database\Eloquent\Model;

class ReferralUpdates extends Model
{
    protected $table = 'referral_updates';
    protected $primaryKey = 'referral_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'referral_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'referral_updates_referral_id',
        'referral_updates_public_notes',
        'referral_updates_private_notes',
        'referral_updates_notify_directory_company',
        'referral_updates_notify_client',
        'referral_updates_date_created',
        'referral_updates_created_by'
    ];

    // Relationships --done
    public function referral()
    {
        return $this->belongsTo(Referral::class, 'referral_updates_referral_id', 'referral_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'referral_updates_created_by', 'employee_id');
    }
}
