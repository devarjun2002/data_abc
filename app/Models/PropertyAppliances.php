<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyAppliances extends Model
{
    use HasFactory;

    protected $table = 'property_appliances';
    protected $primaryKey = 'property_appliances_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_appliances_name',
        'property_appliances_sort'
    ];
}
