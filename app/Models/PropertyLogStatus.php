<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Property;

use Illuminate\Database\Eloquent\Model;

class PropertyLogStatus extends Model
{
    protected $table = 'property_log_status';
    protected $primaryKey = 'property_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'property_id',
        'property_status_old',
        'property_status_new',
        'property_status_notes',
        'property_published',
        'property_updated_by',
        'property_date_updated',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'property_updated_by', 'user_id');
    }
}
