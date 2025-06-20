<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    protected $table = 'property_images';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
