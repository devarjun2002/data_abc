<?php

namespace App\Models;
use App\Models\Development;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class DevelopmentUpdates extends Model
{
    protected $table = 'development_updates';
    protected $primaryKey = 'development_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'development_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'development_updates_development_id',
        'development_updates_notes',
        'development_updates_date_created',
        'development_updates_created_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'development_updates_created_by', 'employee_id');
    }

    public function development()
    {
        return $this->belongsTo(Development::class, 'development_updates_development_id', 'development_id');
    }
}
