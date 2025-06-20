<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    protected $table = 'development';
    protected $primaryKey = 'development_id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to other tables, e.g. certificates, properties, etc.
}
