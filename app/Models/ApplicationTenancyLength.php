<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationTenancyLength extends Model
{
    protected $table = 'application_tenancy_length';
    protected $primaryKey = 'application_tenancy_length_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'application_tenancy_length_name',
        'application_tenancy_length_months',
        'application_tenancy_length_description'
    ];

    // Relationships
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'application_tenancy_length', 'application_tenancy_length_id');
    }
}
