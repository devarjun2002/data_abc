<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSearch extends Model
{
    protected $table = 'website_search';
    protected $primaryKey = 'website_search_id';
    public $timestamps = false;
    protected $fillable = [];
}
