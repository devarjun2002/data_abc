<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraHoursRewardType extends Model
{
    protected $table = 'extra_hours_reward_type';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'name',
        'sort'
    ];
}
