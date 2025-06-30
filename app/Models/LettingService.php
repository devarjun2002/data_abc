<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LettingService extends Model
{
    protected $table = 'letting_service';
    protected $primaryKey = 'letting_service_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'letting_service_name',
        'letting_service_name_short',
        'letting_service_archived',
        'letting_service_sort',
    ];
    // Reverse Relationships
public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'tenancy_letting_service', 'letting_service_id');
    }
}