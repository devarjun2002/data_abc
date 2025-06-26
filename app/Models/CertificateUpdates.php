<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateUpdates extends Model
{
    protected $table = 'certificate_updates';
    protected $primaryKey = 'certificate_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'certificate_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'certificate_updates_certificate_id',
        'certificate_updates_public_notes',
        'certificate_updates_private_notes',
        'certificate_updates_notify_landlord',
        'certificate_updates_notify_contractor',
        'certificate_updates_date_created',
        'certificate_updates_created_by'
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_updates_certificate_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'certificate_updates_created_by');
    }
}
