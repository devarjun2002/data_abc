<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationDeclineReason extends Model
{
    protected $table = 'application_decline_reason';
    protected $primaryKey = 'application_decline_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_decline_reason_name',
    ];

    // Relationships
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'application_decline_reason', 'application_decline_reason_id');
    }
}
