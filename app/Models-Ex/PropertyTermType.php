<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTermType extends Model
{
    protected $table = 'property_term_type';
    protected $primaryKey = 'property_term_type_id';
    public $timestamps = false;

    protected $fillable = [
        'property_term_type_name'
    ];

    // Add relationships once the related models are created
}
