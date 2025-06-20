<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    protected $table = 'capacity';
    protected $primaryKey = 'capacity_id';
    public $timestamps = false;
    protected $fillable = [];
}
