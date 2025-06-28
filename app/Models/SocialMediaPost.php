<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMediaPost extends Model
{
    protected $table = 'social_media_post';
    protected $primaryKey = 'social_media_post_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'social_media_post_name',
        'social_media_post_sort'
    ];
}
