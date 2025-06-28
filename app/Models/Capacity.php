<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    protected $table = 'capacity';
    protected $primaryKey = 'capacity_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'capacity_name',
        'capacity_name_short'
    ];

    // Relationships --done
    public function landlords()
    {
        return $this->hasMany(Landlord::class, 'landlord_capacity', 'capacity_id');
    }
}
