<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PossessionStatusCompletion extends Model
{
    protected $table = 'possession_status_completion';
    protected $primaryKey = 'possession_status_completion_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'possession_status_completion_name',
        'possession_status_completion_sort',
    ];
}
