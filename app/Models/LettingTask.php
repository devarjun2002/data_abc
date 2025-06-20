<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LettingTask extends Model
{
    protected $table = 'letting_task';
    protected $primaryKey = 'letting_task_id';
    public $timestamps = false;
    protected $fillable = [];
}
