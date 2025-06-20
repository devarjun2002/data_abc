<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksFiles extends Model
{
    protected $table = 'works_files';
    protected $primaryKey = 'works_files_id';
    public $timestamps = false;
    protected $fillable = [];

    // Relationships
    public function works()
    {
        return $this->belongsTo(Works::class, 'works_id', 'works_id');
    }
}
