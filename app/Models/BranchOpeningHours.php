<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchOpeningHours extends Model
{
    protected $table = 'branch_opening_hours';
    protected $primaryKey = 'branch_opening_hours_id';
    public $timestamps = false;
    protected $guarded = [];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'branch_id');
    }
    public function day()
    {
        return $this->belongsTo(BranchOpeningHoursDay::class, 'branch_opening_hours_day', 'id');
    }
}
