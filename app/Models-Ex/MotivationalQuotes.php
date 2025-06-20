<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotivationalQuotes extends Model
{
    protected $table = 'motivational_quotes';
    protected $primaryKey = 'motivational_quotes_id';
    public $timestamps = false;
    protected $fillable = [];
}
