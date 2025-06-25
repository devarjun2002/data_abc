<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRightmovePerformanceStatistics extends Model
{
    protected $table = 'property_rightmove_performance_statistics';
    protected $primaryKey = 'prps_id';
    public $timestamps = false;
    protected $guarded = [];

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

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
