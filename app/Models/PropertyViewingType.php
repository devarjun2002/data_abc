<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyViewingType extends Model
{
    protected $table = 'property_viewing_type';
    protected $primaryKey = 'property_viewing_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_viewing_type_name',
        'property_viewing_type_description',
    ];
}
