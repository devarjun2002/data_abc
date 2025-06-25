<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AeaPostcodes extends Model
{
    protected $table = 'aea_postcodes';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'post_code',
        'lat',
        'lng'
    ];
}
