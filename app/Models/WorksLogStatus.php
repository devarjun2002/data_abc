<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksLogStatus extends Model
{
    protected $table = 'works_log_status';
    protected $primaryKey = 'works_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'works_id',
        'works_status_old',
        'works_status_new',
        'works_updated_by',
        'works_date_updated',
    ];

    public function works()
    {
        return $this->belongsTo(Works::class, 'works_id', 'works_id');
    }

    public function works_status_old()
    {
        return $this->belongsTo(WorksStatus::class, 'works_status_old', 'works_status_id');
    }
}
