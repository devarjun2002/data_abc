<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyVendor extends Model
{
    protected $table = 'property_vendor';
    protected $primaryKey = 'property_vendor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_id',
        'vendor_id',
        'vendor_lead',
        'vendor_official'
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'vendor_id', 'landlord_id');
    }
}
