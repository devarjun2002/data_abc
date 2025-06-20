<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor';
    protected $primaryKey = 'vendor_id';
    public $timestamps = false;
    protected $fillable = [];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_vendor', 'vendor_id', 'property_id');
    }
}
