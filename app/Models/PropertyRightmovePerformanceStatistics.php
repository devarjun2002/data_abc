<?php

namespace App\Models;
use App\Models\Property;
use App\Models\PropertyAvailability;
use App\Models\PropertyStatus;

use Illuminate\Database\Eloquent\Model;

class PropertyRightmovePerformanceStatistics extends Model
{
    protected $table = 'property_rightmove_performance_statistics';
    protected $primaryKey = 'prps_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'prps_date' => 'datetime',
    ];

    protected $fillable = [
        'prps_date',
        'prps_property_id',
        'prps_property_availability',
        'prps_property_status',
        'prps_featured_property',
        'prps_premium_listing',
        'prps_total_summary_views',
        'prps_total_detail_views',
        'prps_click_through_rate',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'prps_property_id', 'property_id');
    }

    public function availability()
    {
        return $this->belongsTo(PropertyAvailability::class, 'prps_property_availability', 'property_availability_id');
    }

    public function status()
    {
        return $this->belongsTo(PropertyStatus::class, 'prps_property_status', 'property_status_id');
    }
}
