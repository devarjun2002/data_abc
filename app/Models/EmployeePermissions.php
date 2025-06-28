<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeePermissions extends Model
{
    protected $table = 'employee_permissions';
    protected $primaryKey = 'employee_permissions_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'employee_permissions_name',
        'employee_permissions_category',
    ];

    // Relationships --done
    public function category()
    {
        return $this->belongsTo(EmployeePermissionsCategory::class, 'employee_permissions_category', 'employee_permissions_category_id');
    }
}
