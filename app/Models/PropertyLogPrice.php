<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyLogPrice extends Model
{
    protected $table = 'property_log_price';
    protected $primaryKey = 'property_log_price_id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to property, offer, sale, etc.
}
