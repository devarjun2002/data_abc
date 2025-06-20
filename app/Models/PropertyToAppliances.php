<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToAppliances extends Model
{
    protected $table = 'property_to_appliances';
    protected $primaryKey = 'property_to_appliances_id';
    public $timestamps = false;
    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
