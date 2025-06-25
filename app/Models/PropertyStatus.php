<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    protected $table = 'property_status';
    protected $primaryKey = 'property_status_id';
    public $timestamps = false;
    protected $guarded = [];
    public $incrementing = false;

    protected $fillable = [
        'property_status_name',
        'property_status_type',
        'property_status_name_short',
    ];
}
