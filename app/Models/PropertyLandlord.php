<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyLandlord extends Model
{
    protected $table = 'property_landlord';
    protected $primaryKey = 'property_landlord_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_id',
        'landlord_id',
        'landlord_lead',
        'landlord_official',
        'landlord_invoicing',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function landlord()
    {
        return $this->belongsTo(Landlord::class, 'landlord_id', 'landlord_id');
    }
}
