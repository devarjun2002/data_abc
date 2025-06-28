<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksRoom extends Model
{
    protected $table = 'works_room';
    protected $primaryKey = 'works_room_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'works_room_name',
        'works_room_sort'
    ];
}
