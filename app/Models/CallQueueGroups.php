<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallQueueGroups extends Model
{
    protected $table = 'call_queue_groups';
    protected $primaryKey = 'call_queue_groups_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'call_queue_groups_name',
        'call_queue_groups_extension',
        'call_queue_groups_description'
    ];
}
