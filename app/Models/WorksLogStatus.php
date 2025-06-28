<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksLogStatus extends Model
{
    protected $table = 'works_log_status';
    protected $primaryKey = 'works_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'works_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'works_id',
        'works_status_old',
        'works_status_new',
        'works_updated_by',
        'works_date_updated',
    ];

    // Relationships --done
    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'works_updated_by');
    }

    public function works()
    {
        return $this->belongsTo(Works::class, 'works_id');
    }

    public function statusOld()
    {
        return $this->belongsTo(WorksStatus::class, 'works_status_old');
    }

    public function statusNew()
    {
        return $this->belongsTo(WorksStatus::class, 'works_status_new');
    }
}
