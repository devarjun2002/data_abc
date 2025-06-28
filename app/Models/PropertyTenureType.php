<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyTenureType extends Model
{
    protected $table = 'property_tenure_type';
    protected $primaryKey = 'property_tenure_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_tenure_type_name',
    ];
}
