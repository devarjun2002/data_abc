<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationTenancyLength extends Model
{
    protected $table = 'application_tenancy_length';
    protected $primaryKey = 'application_tenancy_length_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_tenancy_length_name',
    ];

    // Relationships --done
    public function applications()
    {
        return $this->hasMany(Application::class, 'application_tenancy_length', 'application_tenancy_length_id');
    }
}
