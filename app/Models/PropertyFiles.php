<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFiles extends Model
{
    use HasFactory;

    protected $table = 'property_files';
    protected $primaryKey = 'file_id';
    public $timestamps = false;

    protected $fillable = [
        'property_id',
        'filename',
        'caption',
        'date_added',
        'sort',
    ];

    protected $dates = [
        'date_added',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
