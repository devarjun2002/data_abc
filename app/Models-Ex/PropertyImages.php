<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    use HasFactory;

    protected $table = 'property_images';
    protected $primaryKey = 'image_id';
    public $timestamps = false;

    protected $fillable = [
        'property_id',
        'filename',
        'caption',
        'filesize',
        'date_added',
        'sort',
        'sort_highlights',
        'floor_plan',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $casts = [
        'floor_plan' => 'boolean',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
