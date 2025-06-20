<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyPropertyPart extends Model
{
    protected $table = 'tenancy_property_part';
    protected $primaryKey = 'tenancy_property_part_id';
    public $timestamps = false;
    protected $guarded = [];

    public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'tenancy_property_part_id', 'tenancy_property_part_id');
    }
}
