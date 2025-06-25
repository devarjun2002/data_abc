<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusYesNoNew extends Model
{
    protected $table = 'status_yes_no_new';
    protected $primaryKey = 'status_yes_no_new_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'status_yes_no_new_name',
    ];
}
