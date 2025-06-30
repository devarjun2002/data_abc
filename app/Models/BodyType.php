<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyType extends Model
{
    protected $table = 'body_type';
    protected $primaryKey = 'body_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'body_type_name'
    ];
    // Reverse Relationships
public function landlords()
    {
        return $this->hasMany(Landlord::class, 'landlord_type', 'body_type_id');
    }
}