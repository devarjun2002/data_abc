<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationType extends Model
{
    protected $table = 'application_type';
    protected $primaryKey = 'application_type_id';
    public $timestamps = false;
    protected $fillable = [];
}
