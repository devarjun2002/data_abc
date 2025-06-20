<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAppliances extends Model
{
    use HasFactory;

    protected $table = 'property_appliances';
    protected $primaryKey = 'property_appliances_id';
    public $timestamps = false;

    protected $fillable = [
        'property_appliances_name',
        'property_appliances_sort',
    ];
}
