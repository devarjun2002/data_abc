<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationLogStatus extends Model
{
    protected $table = 'application_log_status';
    protected $primaryKey = 'application_log_status_id';
    public $timestamps = false;
    protected $fillable = [];
}
