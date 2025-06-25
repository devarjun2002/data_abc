<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusYesNoNewTbc extends Model
{
    protected $table = 'status_yes_no_new_tbc';
    protected $primaryKey = 'status_yes_no_new_tbc_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'status_yes_no_name',
    ];
}
