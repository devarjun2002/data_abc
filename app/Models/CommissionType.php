<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommissionType extends Model
{
    protected $table = 'commission_type';
    protected $primaryKey = 'commission_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'commission_type_name'
    ];
}
