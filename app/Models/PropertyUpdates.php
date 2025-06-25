<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyUpdates extends Model
{
    protected $table = 'property_updates';
    protected $primaryKey = 'property_updates_id';
    public $timestamps = false;
    protected $guarded = [];

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

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_updates_property_id', 'property_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_updates_created_by', 'employee_id');
    }
}
