<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyMoveOutReason extends Model
{
    protected $table = 'tenancy_move_out_reason';
    protected $primaryKey = 'tenancy_move_out_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenancy_move_out_reason_name',
    ];
}
