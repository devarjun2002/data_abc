<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchOpeningHours extends Model
{
    protected $table = 'branch_opening_hours';
    protected $primaryKey = 'branch_opening_hours_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'branch_id',
        'branch_opening_hours_day',
        'branch_opening_hours_open_time',
        'branch_opening_hours_close_time'
    ];

    // Relationships --done
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'branch_id');
    }
}
