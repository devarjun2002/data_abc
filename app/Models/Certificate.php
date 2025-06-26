<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificate';
    protected $primaryKey = 'certificate_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'certificate_date_created' => 'datetime',
    ];

    protected $fillable = [
        'certificate_property',
        'certificate_type',
        'certificate_reference',
        'certificate_link',
        'certificate_rating',
        'certificate_start_date',
        'certificate_expiry_date',
        'certificate_notes',
        'certificate_notes_private',
        'certificate_renewal_contractor',
        'certificate_renewal_instructed',
        'certificate_renewal_last_instructed',
        'certificate_renewal_instructed_by',
        'certificate_date_created',
        'certificate_created_by'
    ];

    // Relationships
    public function property()
    {
        return $this->belongsTo(Property::class, 'certificate_property', 'property_id');
    }

    public function certificateType()
    {
        return $this->belongsTo(CertificateType::class, 'certificate_type', 'certificate_type_id');
    }

    public function renewalContractor()
    {
        return $this->belongsTo(DirectoryIndividual::class, 'certificate_renewal_contractor', 'directory_individual_id');
    }

    public function renewalInstructedBy()
    {
        return $this->belongsTo(Employee::class, 'certificate_renewal_instructed_by', 'employee_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'certificate_created_by', 'employee_id');
    }

    public function files()
    {
        return $this->hasMany(CertificateFiles::class, 'certificate_files_certificate_id', 'certificate_id');
    }

    public function updates()
    {
        return $this->hasMany(CertificateUpdates::class, 'certificate_updates_certificate_id', 'certificate_id');
    }
}
