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

    protected $casts = [
        'application_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'application_id',
        'application_status_old',
        'application_status_new',
        'application_updated_by',
        'application_date_updated'
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'application_id', 'application_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_updated_by', 'employee_id');
    }
}
