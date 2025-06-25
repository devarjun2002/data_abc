<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyEntranceFloor extends Model
{
    use HasFactory;

    protected $table = 'property_entrance_floor';
    protected $primaryKey = 'property_entrance_floor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_entrance_floor_name',
        'property_entrance_floor_sort',
    ];
}
