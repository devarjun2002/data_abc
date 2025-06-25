<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksCategory extends Model
{
    protected $table = 'works_category';
    protected $primaryKey = 'works_category_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'works_category_name',
        'works_category_sort',
    ];

    public function works()
    {
        return $this->hasMany(Works::class, 'works_category', 'works_category_id');
    }
}
