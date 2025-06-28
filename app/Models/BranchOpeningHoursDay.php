<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchOpeningHoursDay extends Model
{
    protected $table = 'branch_opening_hours_day';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'name'
    ];

    // Relationships --done
    public function openingHours()
    {
        return $this->hasMany(BranchOpeningHours::class, 'branch_opening_hours_day', 'id');
    }
}
