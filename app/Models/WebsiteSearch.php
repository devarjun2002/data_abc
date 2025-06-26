<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSearch extends Model
{
    protected $table = 'website_search';
    protected $primaryKey = 'website_search_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'website_search_date_added' => 'datetime',
    ];

    protected $fillable = [
        'website_search_locations',
        'website_search_date_added',
        'website_search_longitude',
        'website_search_latitude',
        'website_search_type',
    ];
}
