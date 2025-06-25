<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationStatus extends Model
{
    protected $table = 'application_status';
    protected $primaryKey = 'application_status_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'application_status_name',
        'application_status_description',
        'application_status_sort'
    ];

    // Relationships
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'application_status', 'application_status_id');
    }
}
