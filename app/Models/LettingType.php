<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LettingType extends Model
{
    use HasFactory;

    protected $table = 'letting_type';
    protected $primaryKey = 'letting_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'letting_type_name',
    ];
}
