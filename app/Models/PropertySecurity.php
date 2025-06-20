<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertySecurity extends Model
{
    protected $table = 'property_security';
    protected $primaryKey = 'property_security_id';
    public $timestamps = false;
    protected $guarded = [];

    public function properties()
    {
        return $this->hasMany(Property::class, 'property_security_id', 'property_security_id');
    }
}
