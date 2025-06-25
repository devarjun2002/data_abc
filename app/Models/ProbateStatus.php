<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProbateStatus extends Model
{
    protected $table = 'probate_status';
    protected $primaryKey = 'probate_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'probate_status_name',
        'probate_status_sort',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class, 'probate_status_id', 'probate_status_id');
    }
}
