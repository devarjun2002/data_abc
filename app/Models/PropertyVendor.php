<?php

namespace App\Models;
use App\Models\Property;
use App\Models\Vendor;

use Illuminate\Database\Eloquent\Model;

class PropertyVendor extends Model
{
    protected $table = 'property_vendor';
    protected $primaryKey = 'property_vendor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'vendor_id',
        'vendor_lead',
        'vendor_official'
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'property_vendor_id', 'vendor_id');
    }
}
