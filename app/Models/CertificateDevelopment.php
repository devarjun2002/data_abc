<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateDevelopment extends Model
{
    use HasFactory;

    protected $table = 'certificate_development';
    protected $primaryKey = 'certificate_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'certificate_date_created' => 'datetime',
    ];

    protected $fillable = [
        'certificate_development',
        'certificate_type',
        'certificate_reference',
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
        'certificate_created_by',
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'certificate_created_by', 'employee_id');
    }

    public function development()
    {
        return $this->belongsTo(Development::class, 'certificate_development', 'development_id');
    }

    public function type()
    {
        return $this->belongsTo(CertificateType::class, 'certificate_type', 'certificate_type_id');
    }

    public function renewalContractor()
    {
        return $this->belongsTo(Directory::class, 'certificate_renewal_contractor', 'directory_id');
    }
}
