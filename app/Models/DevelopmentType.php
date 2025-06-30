<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevelopmentType extends Model
{
    protected $table = 'development_type';
    protected $primaryKey = 'development_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'development_type_name',
    ];
    // Reverse Relationships
public function developments()
    {
        return $this->hasMany(Development::class, 'development_type', 'development_type_id');
    }
}