<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationTenancyLength extends Model
{
    protected $table = 'application_tenancy_length';
    protected $primaryKey = 'application_tenancy_length_id';
    public $timestamps = false;
    protected $fillable = [];
}
