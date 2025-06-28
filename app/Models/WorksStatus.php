<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksStatus extends Model
{
    protected $table = 'works_status';
    protected $primaryKey = 'works_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'works_status_name',
        'works_status_sort'
    ];

    // Relationships --done
    public function works()
    {
        return $this->hasMany(Works::class, 'works_status', 'works_status_id');
    }
}
