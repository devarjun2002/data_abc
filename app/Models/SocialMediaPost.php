<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialMediaPost extends Model
{
    protected $table = 'social_media_post';
    protected $primaryKey = 'social_media_post_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'social_media_post_name',
        'social_media_post_sort'
    ];

    public function property(): BelongsTo {
        return $this->belongsTo(Property::class, 'social_media_post_property', 'property_id');
    }
}
