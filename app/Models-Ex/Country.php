<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_country', 'country_id', 'property_id');
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'country_id', 'id');
    }
}

//filament