<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyTermType extends Model
{
    protected $table = 'property_term_type';
    protected $primaryKey = 'property_term_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_term_type_name',
    ];
} 