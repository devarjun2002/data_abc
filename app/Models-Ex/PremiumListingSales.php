<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumListingSales extends Model
{
    protected $table = 'premium_listing_sales';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];
}
