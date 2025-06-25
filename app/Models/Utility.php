<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    protected $table = 'utility';
    protected $primaryKey = 'utility_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'utility_name'
    ];
}
