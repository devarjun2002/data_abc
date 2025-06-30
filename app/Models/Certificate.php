<?php

namespace App\Models;
use App\Models\CalendarEventType;
use App\Models\Directory;
use App\Models\Employee;
use App\Models\Property;

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

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'certificate_created_by', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'certificate_property', 'property_id');
    }

    public function type()
    {
        return $this->belongsTo(CalendarEventType::class, 'certificate_type', 'calendar_event_type_id');
    }

    public function renewalContractor()
    {
        return $this->belongsTo(Directory::class, 'certificate_renewal_contractor', 'directory_id');
    }
}
