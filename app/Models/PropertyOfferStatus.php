<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferStatus extends Model
{
    protected $table = 'property_offer_status';
    protected $primaryKey = 'property_offer_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_offer_status_name',
        'property_offer_status_sort',
    ];
}
