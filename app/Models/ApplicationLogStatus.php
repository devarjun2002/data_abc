<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationLogStatus extends Model
{
    protected $table = 'application_log_status';
    protected $primaryKey = 'application_log_status_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'application_log_status_name',
        'application_log_status_description'
    ];

    // Relationships
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'application_log_status', 'application_log_status_id');
    }
}
