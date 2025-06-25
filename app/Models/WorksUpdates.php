<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksUpdates extends Model
{
    protected $table = 'works_updates';
    protected $primaryKey = 'works_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'works_updates_works_id',
        'works_updates_public_notes',
        'works_updates_private_notes',
        'works_updates_notify_landlords',
        'works_updates_notify_tenants',
        'works_updates_notify_contractor',
        'works_updates_notify_works_dept',
        'works_updates_date_created',
        'works_updates_created_by'
    ];

    public function works()
    {
        return $this->belongsTo(Works::class, 'works_updates_works', 'works_id');
    }
}
