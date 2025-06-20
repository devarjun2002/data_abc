<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificates';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to other tables, e.g. property, development certificates, etc.
}
