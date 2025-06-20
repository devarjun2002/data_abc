<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyHeating extends Model
{
    use HasFactory;

    protected $table = 'property_heating';
    protected $primaryKey = 'property_heating_id';
    public $timestamps = false;

    protected $fillable = [
        'property_heating_name',
    ];
}
