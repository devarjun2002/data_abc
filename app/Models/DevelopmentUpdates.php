<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DevelopmentUpdates extends Model
{
    protected $table = 'development_updates';
    protected $primaryKey = 'development_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'development_updates_development_id',
        'development_updates_notes',
        'development_updates_date_created',
        'development_updates_created_by'
    ];

    // Relationships
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'development_updates_development_id', 'development_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'development_updates_created_by', 'employee_id');
    }
}
