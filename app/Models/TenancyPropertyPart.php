<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyPropertyPart extends Model
{
    protected $table = 'tenancy_property_part';
    protected $primaryKey = 'tenancy_property_part_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_property_part_name',
    ];
}
