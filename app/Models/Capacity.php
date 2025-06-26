<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    // Relationships
    public function landlords(): HasMany
    {
        return $this->hasMany(Landlord::class, 'landlord_capacity', 'capacity_id');
    }
}
