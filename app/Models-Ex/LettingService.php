<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LettingService extends Model
{
    protected $table = 'letting_service';
    protected $primaryKey = 'letting_service_id';
    public $timestamps = false;
    protected $fillable = [];
}
