<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyViewingArrangement extends Model
{
    protected $table = 'property_viewing_arrangement';
    protected $primaryKey = 'property_viewing_arrangement_id';
    public $timestamps = false;
    protected $fillable = [];
}
