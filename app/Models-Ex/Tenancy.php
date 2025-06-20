<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenancy extends Model
{
    protected $table = 'tenancies';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];
}
