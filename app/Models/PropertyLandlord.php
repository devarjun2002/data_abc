<?php

namespace App\Models;
use App\Models\Landlord;
use App\Models\Property;

use Illuminate\Database\Eloquent\Model;

class PropertyLandlord extends Model
{
    protected $table = 'property_landlord';
    protected $primaryKey = 'property_landlord_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'landlord_id',
        'landlord_lead',
        'landlord_official',
        'landlord_invoicing',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function landlord()
    {
        return $this->belongsTo(Landlord::class, 'property_landlord_id', 'landlord_id');
    }
}
