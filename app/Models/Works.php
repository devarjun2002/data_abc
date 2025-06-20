<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'works';
    protected $primaryKey = 'works_id';
    public $timestamps = false;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(WorksCategory::class, 'works_category_id', 'works_category_id');
    }

    public function files()
    {
        return $this->hasMany(WorksFiles::class, 'works_id', 'works_id');
    }
}
