<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryCategory extends Model
{
    protected $table = 'directory_category';
    protected $primaryKey = 'directory_category_id';
    public $timestamps = false;
    protected $fillable = [];
}
