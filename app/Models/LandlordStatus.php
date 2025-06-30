<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandlordStatus extends Model
{
    protected $table = 'landlord_status';
    protected $primaryKey = 'landlord_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'landlord_status_name',
    ];
    // Reverse Relationships
public function landlords()
    {
        return $this->hasMany(Landlord::class, 'landlord_status', 'landlord_status_id');
    }
}