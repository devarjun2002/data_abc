<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksFiles extends Model
{
    protected $table = 'works_files';
    protected $primaryKey = 'works_files_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'works_files_date_added' => 'datetime',
    ];

    protected $fillable = [
        'works_id',
        'works_files_filename',
        'works_files_caption',
        'works_files_date_added',
        'works_files_sort',
    ];

    // Relationships --done
    public function works(): BelongsTo
    {
        return $this->belongsTo(Works::class, 'works_id');
    }
}
