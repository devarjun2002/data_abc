<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Title extends Model
{
    protected $table = 'title';
    protected $primaryKey = 'title_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'title_name',
    ];
}
