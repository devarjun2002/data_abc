<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyFixedTermUnit extends Model
{
    protected $table = 'tenancy_fixed_term_unit';
    protected $primaryKey = 'tenancy_fixed_term_unit_id';
    public $timestamps = false;
    protected $guarded = [];

    public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'tenancy_fixed_term_unit_id', 'tenancy_fixed_term_unit_id');
    }
}
