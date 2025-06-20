<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeGroupDelete extends Model
{
    protected $table = 'employee_group_delete';
    protected $primaryKey = 'employee_group_id';
    public $timestamps = false;

    protected $fillable = [
        'employee_group_name'
    ];
}
