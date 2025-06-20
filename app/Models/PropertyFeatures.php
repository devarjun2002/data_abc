<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFeatures extends Model
{
    use HasFactory;

    protected $table = 'property_features';
    protected $primaryKey = 'property_features_id';
    public $timestamps = false;

    protected $fillable = [
        'property_features_name',
    ];
}
