<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusYesNo extends Model
{
    protected $table = 'status_yes_no';
    protected $primaryKey = 'status_yes_no_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'status_yes_no_name',
        'status_yes_no_backup'
    ];
}
