<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\KeysLocation;
use App\Models\Property;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeysLogLocation extends Model
{
    use HasFactory;

    protected $table = 'keys_log_location';
    protected $primaryKey = 'keys_log_location_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'keys_log_location_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'property_id',
        'keys_location',
        'keys_log_location_updated_by',
        'keys_log_location_date_updated',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function keysLocation()
    {
        return $this->belongsTo(KeysLocation::class, 'keys_location', 'keys_location_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'keys_log_location_updated_by', 'employee_id');
    }
}
