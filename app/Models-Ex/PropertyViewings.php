<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyViewings extends Model
{
    protected $table = 'property_viewings';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];
}
