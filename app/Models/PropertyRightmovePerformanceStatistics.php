<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRightmovePerformanceStatistics extends Model
{
    protected $table = 'property_rightmove_performance_statistics';
    protected $primaryKey = 'property_rightmove_performance_statistics_id';
    public $timestamps = false;
    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
