<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeePermissionsCategory extends Model
{
    protected $table = 'employee_permissions_category';
    protected $primaryKey = 'employee_permissions_category_id';
    public $timestamps = false;
    protected $fillable = [];

    public function permissions()
    {
        return $this->hasMany(EmployeePermissions::class, 'employee_permissions_category', 'employee_permissions_category_id');
    }
}
