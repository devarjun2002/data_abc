<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AeaPostcode extends Model
{
    protected $table = 'aea_postcodes';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'post_code',
        'lat',
        'lng'
    ];
}
