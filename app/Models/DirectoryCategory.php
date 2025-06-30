<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryCategory extends Model
{
    protected $table = 'directory_category';
    protected $primaryKey = 'directory_category_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'directory_category_name',
        'directory_category_contractor'
    ];
    // Reverse Relationships
public function directories()
    {
        return $this->hasMany(Directory::class, 'directory_category', 'directory_category_id');
    }
}