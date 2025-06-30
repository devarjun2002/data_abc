<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseType extends Model
{
    use HasFactory;

    protected $table = 'lease_type';
    protected $primaryKey = 'lease_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'lease_type_name',
    ];
    // Reverse Relationships
public function propertyTenancies()
    {
        return $this->hasMany(PropertyTenancy::class, 'property_tenancy_lease_type', 'lease_type_id');
    }
}