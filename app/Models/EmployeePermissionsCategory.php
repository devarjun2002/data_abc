<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeePermissionsCategory extends Model
{
    protected $table = 'employee_permissions_category';
    protected $primaryKey = 'employee_permissions_category_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'employee_permissions_category_name',
        'employee_permissions_category_sort'
    ];

    public function permissions()
    {
        return $this->hasMany(EmployeePermissions::class, 'employee_permissions_category', 'employee_permissions_category_id');
    }
}
