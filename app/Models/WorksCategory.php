<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksCategory extends Model
{
    protected $table = 'works_category';
    protected $primaryKey = 'works_category_id';
    public $timestamps = false;
    protected $guarded = [];

    public function works()
    {
        return $this->hasMany(Works::class, 'works_category_id', 'works_category_id');
    }
}
