<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientSource extends Model
{
    protected $table = 'client_source';
    protected $primaryKey = 'client_source_id';
    public $timestamps = false;

    protected $fillable = [
        'client_source_name'
    ];
}
