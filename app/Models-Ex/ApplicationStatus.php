<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationStatus extends Model
{
    protected $table = 'application_status';
    protected $primaryKey = 'application_status_id';
    public $timestamps = false;
    protected $fillable = [];
}
