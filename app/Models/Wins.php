<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wins extends Model
{
    protected $table = 'wins';
    protected $primaryKey = 'win_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'win_name',
        'win_date_created',
    ];
}
