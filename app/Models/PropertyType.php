<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table = 'property_type';
    protected $primaryKey = 'property_type_id';
    public $timestamps = false;
    protected $fillable = [];
}
