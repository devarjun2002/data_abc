<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumListingLettings extends Model
{
    protected $table = 'premium_listing_lettings';
    protected $primaryKey = 'premium_listing_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'premium_listing_name',
        'premium_listing_archive',
    ];
}
