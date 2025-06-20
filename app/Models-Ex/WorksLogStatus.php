<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksLogStatus extends Model
{
    protected $table = 'works_log_status';
    protected $primaryKey = 'works_log_status_id';
    public $timestamps = false;
    protected $fillable = [];
}
