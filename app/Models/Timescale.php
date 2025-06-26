<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timescale extends Model
{
    protected $table = 'timescale';
    protected $primaryKey = 'timescale_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'timescale_name',
        'timescale_sort'
    ];
}
