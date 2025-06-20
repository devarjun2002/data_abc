<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksUpdates extends Model
{
    protected $table = 'works_updates';
    protected $primaryKey = 'works_updates_id';
    public $timestamps = false;
    protected $fillable = [];
}
