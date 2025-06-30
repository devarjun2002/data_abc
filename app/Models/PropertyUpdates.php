<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Property;

use Illuminate\Database\Eloquent\Model;

class PropertyUpdates extends Model
{
    protected $table = 'property_updates';
    protected $primaryKey = 'property_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_updates_date_created' => 'datetime',
        'property_updates_property_next_review_date' => 'datetime',
    ];

    protected $fillable = [
        'property_updates_property_id',
        'property_updates_notes_public',
        'property_updates_notes_private',
        'property_updates_property_next_review_date',
        'property_updates_property_next_review_notes',
        'property_updates_notify_landlord_vendor',
        'property_updates_date_created',
        'property_updates_created_by'
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_updates_property_id', 'property_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'property_updates_created_by', 'employee_id');
    }
}
