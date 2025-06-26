<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandlordNrlStatus extends Model
{
    protected $table = 'landlord_nrl_status';
    protected $primaryKey = 'landlord_nrl_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'landlord_nrl_status_name',
    ];

    public function landlords()
    {
        return $this->hasMany(Landlord::class, 'landlord_nrl_status_id', 'landlord_nrl_status_id');
    }
}
