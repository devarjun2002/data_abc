<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyAllowedOccupant extends Model
{
    protected $table = 'tenancy_allowed_occupant';
    protected $primaryKey = 'tenancy_allowed_occupant_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_id',
        'tenancy_allowed_occupant_title',
        'tenancy_allowed_occupant_first_name',
        'tenancy_allowed_occupant_surname',
        'tenancy_allowed_occupant_phone_number',
        'tenancy_allowed_occupant_email_address'
    ];

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}
