<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevelopmentType extends Model
{
    protected $table = 'development_type';
    protected $primaryKey = 'development_type_id';
    public $timestamps = false;
    protected $fillable = [];
}
