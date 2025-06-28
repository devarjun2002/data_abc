<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyLostManagement extends Model
{
    protected $table = 'property_lost_management';
    protected $primaryKey = 'property_lost_management_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_lost_management_reason',
    ];
}
