<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSearch extends Model
{
    protected $table = 'website_search';
    protected $primaryKey = 'website_search_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'website_search_name',
        'website_search_url',
        'website_search_type',
        'website_search_status',
        'website_search_notes',
        'website_search_created_by',
    ];
}
