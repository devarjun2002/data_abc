<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TownCityDelete extends Model
{
    protected $table = 'town_city_delete';
    protected $primaryKey = 'town_city_delete_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'town_city_delete_name',
    ];
}
